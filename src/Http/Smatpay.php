<?php

namespace Smatpay\Http;

use Smatpay\Contracts\PaymentGatewayInterface;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Gateway\Ecocash;
use Smatpay\Gateway\Innbucks;
use Smatpay\Gateway\ZimSwitch;

final class Smatpay
{
    private $walletName;
    public function __construct($walletName)
    {
        $this->walletName = $walletName;
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function getInstance(): PaymentGatewayInterface
    {
        switch ($this->walletName) {
            case 'innbucks':
                return new Innbucks();
            case 'zimswitch':
                return new ZimSwitch();
            case 'ecocash':
                return new Ecocash();
            default:
                throw new PaymentGatewayNotFound($this->walletName);
        }
    }
}
