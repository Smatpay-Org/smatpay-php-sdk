<?php

namespace Smatpay\Examples;

use Smatpay\Constants\TestCredentials;
use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class Ecocash
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_example()
    {
        $instance = Smatpay::getInstance(WalletName::ECOCASH);

        $definition = new PaymentPayloadBuilder();

        $definition
            ->setAmount(5.00)
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY)
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY)
            ->setPaymentDescription("Test Payment")
            ->setPaymentCurrency("USD")
            ->setPayerName("Anesu Ngirande")
            ->setPayerReference(substr(str_shuffle("ABCDEFGHIJKLMNOQPRSTUVWXYZ1234567890"), 0, 12))
            ->setPayerAccountId(36)
            ->setPayerMobile("0772111000")
            ->setProfileId(48);

        $response = $instance->pay($definition, true);
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_enquire_example(string $transactionReference)
    {
        $instance = Smatpay::getInstance(WalletName::ECOCASH);

        $definition = new PaymentEnquireBuilder();

        $definition
            ->setTransactionReference($transactionReference)
            ->setMerchantId("811725368424207")
            ->setMerchantApiKey("uZesFWCWdSy9lKyczSyXb")
            ->setMerchantKey("47e7131a-17de-471c-85cc-67e1c36cda0d");

        $response = $instance->enquire($definition, true);
    }
}
