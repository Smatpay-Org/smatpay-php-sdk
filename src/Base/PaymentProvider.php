<?php

namespace Smatpay\Base;

use Smatpay\Constants\SmatpayURL;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\EnquireFailed;
use Smatpay\Exceptions\PaymentProcessingFailed;
use Smatpay\Exceptions\TokenGenerationFailed;

abstract class PaymentProvider
{
    /**
     * @throws PaymentProcessingFailed
     */
    public function pay(PaymentPayloadBuilder $builder, $isSandbox)
    {
        try {
            $ch = curl_init();

            $request = array_merge($builder->valuesToArray(), ['walletName' => $this->getWalletName()]);

            curl_setopt_array($ch, array(
                CURLOPT_URL => $isSandbox ? SmatpayURL::SANDBOX_PAYMENT_URL : SmatpayURL::PROD_PAYMENT_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($request),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($ch);

            if (!$response) {
                curl_close($ch);
                throw new PaymentProcessingFailed(curl_error($ch));
            }

            curl_close($ch);

            return json_decode($response);
        } catch (\Exception $exception) {
            throw new PaymentProcessingFailed($exception->getMessage());
        }
    }

    /**
     * @throws EnquireFailed
     */
    public function enquire($transaction, bool $isSandbox)
    {
        try {
            $ch = curl_init();

            $token = $this->getAuthenticationToken($transaction, $isSandbox);

            $request = $this->getVerifyBuilder($transaction);

            curl_setopt_array($ch, array(
                CURLOPT_URL => $isSandbox ? SmatpayURL::SANDBOX_ENQUIRE_URL : SmatpayURL::PROD_ENQUIRE_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_POSTFIELDS => json_encode($request),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $token
                ),
            ));

            $response = curl_exec($ch);

            if (!$response) {
                curl_close($ch);
                throw new EnquireFailed(curl_error($ch));
            }

            curl_close($ch);
            return json_decode($response);
        } catch (\Exception $exception) {
            throw new EnquireFailed($exception->getMessage());
        }
    }

    /**
     * @throws TokenGenerationFailed
     */
    private function getAuthenticationToken(PaymentPayloadBuilder $builder, bool $isSandbox)
    {
        try {
            $ch = curl_init();

            curl_setopt_array($ch, array(
                CURLOPT_URL => $isSandbox ? SmatpayURL::SANDBOX_AUTH_URL : SmatpayURL::PROD_AUTH_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode([
                    "merchantId" => $builder->getMerchantId(),
                    "merchantApiKey" => $builder->getMerchantApiKey(),
                    "merchantKey" => $builder->getMerchantKey(),
                ]),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($ch);

            if (!$response) {
                curl_close($ch);
                throw new TokenGenerationFailed(curl_error($ch));
            }

            curl_close($ch);

            return json_decode($response, true)['token'];
        } catch (\Exception $exception) {
            throw new TokenGenerationFailed($exception->getMessage());
        }
    }


    abstract protected function getWalletName(): string;

    abstract protected function getVerifyBuilder($transaction): array;
}
