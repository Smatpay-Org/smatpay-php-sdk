<?php

namespace Smatpay\Gateway;

use Smatpay\Constants\SmatpayURL;
use Smatpay\Definitions\FastCheckoutBuilder;
use Smatpay\Exceptions\PaymentProcessingFailed;

class FastCheckOut
{
    /**
     * @throws PaymentProcessingFailed
     */
    public function checkout(FastCheckoutBuilder $builder, $isSandbox)
    {
        try {
            $ch = curl_init();

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
                CURLOPT_POSTFIELDS => json_encode($builder->valuesToArray()),
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
}
