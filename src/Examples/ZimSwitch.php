<?php

namespace Smatpay\Examples;

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class ZimSwitch
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_example()
    {
        $instance = Smatpay::getInstance(WalletName::ZIMSWITCH);

        $definition = new PaymentPayloadBuilder();

        $definition
            ->setAmount(5.00)
            ->setMerchantId("811725368424207")
            ->setMerchantApiKey("uZesFWCWdSy9lKyczSyXb")
            ->setMerchantKey("47e7131a-17de-471c-85cc-67e1c36cda0d")
            ->setPaymentDescription("Test Payment")
            ->setPaymentCurrency("USD")
            ->setPayerName("Anesu Ngirande")
            ->setPayerReference(str_shuffle("ABCDE12345"))
            ->setPayerAccountId(36)
            ->setProfileId(48);

        $response = $instance->pay($definition, true);
    }
}
