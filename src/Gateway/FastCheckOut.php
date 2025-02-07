<?php

namespace Smatpay\Gateway;

use Smatpay\Base\AuthorizationProvider;
use Smatpay\Constants\SmatpayURL;
use Smatpay\Definitions\AuthenticationBuilder;
use Smatpay\Definitions\FastCheckoutBuilder;
use Smatpay\Exceptions\PaymentProcessingFailed;

class FastCheckOut extends AuthorizationProvider
{
    /**
     * @throws PaymentProcessingFailed
     */
    public function checkout(FastCheckoutBuilder $builder, AuthenticationBuilder $authenticationBuilder, $isSandbox = false)
    {
        try {
            $ch = curl_init();

            $token = $this->getAuthenticationToken($authenticationBuilder, $isSandbox);

            curl_setopt_array($ch, array(
                CURLOPT_URL => $isSandbox ? SmatpayURL::SANDBOX_FAST_CHECKOUT : SmatpayURL::PROD_FAST_CHECKOUT,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $builder->valuesToArray(),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer '.$token
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
}
