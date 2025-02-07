<?php

namespace Smatpay\Base;

use Smatpay\Constants\SmatpayURL;
use Smatpay\Exceptions\TokenGenerationFailed;

abstract class AuthorizationProvider
{
    /**
     * @throws TokenGenerationFailed
     */
    public function getAuthenticationToken($builder, bool $isSandbox = false)
    {
        try {
            $ch = curl_init();

            curl_setopt_array($ch, array(
                CURLOPT_URL => $isSandbox ? SmatpayURL::SANDBOX_AUTH_URL : SmatpayURL::PROD_AUTH_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
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
}
