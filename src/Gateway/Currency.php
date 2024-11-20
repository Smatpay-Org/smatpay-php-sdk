<?php

namespace Smatpay\Gateway;

use Smatpay\Constants\SmatpayURL;

class Currency
{
    public function all()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => SmatpayURL::PROD_CURRENCIES_URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }
}
