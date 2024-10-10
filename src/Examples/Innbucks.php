<?php

namespace Smatpay\Examples;

use Smatpay\Constants\WalletName;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class Innbucks
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function example()
    {
        $smatpay = new Smatpay(WalletName::INNBUCKS);

        $instance = $smatpay->getInstance();

        $url = $instance->pay();
    }
}
