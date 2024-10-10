<?php

namespace Smatpay\Http;

use Smatpay\Contracts\PaymentGatewayInterface;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Gateway\Ecocash;
use Smatpay\Gateway\Innbucks;
use Smatpay\Gateway\ZimSwitch;

final class Smatpay
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public static function getInstance($walletName): PaymentGatewayInterface
    {
        switch ($walletName) {
            case 'innbucks':
                return new Innbucks();
            case 'zimswitch':
                return new ZimSwitch();
            case 'ecocash':
                return new Ecocash();
            default:
                throw new PaymentGatewayNotFound($walletName);
        }
    }
}
