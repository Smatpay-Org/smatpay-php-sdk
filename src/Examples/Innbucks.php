<?php

namespace Smatpay\Examples;

use Smatpay\Constants\TestCredentials;
use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class Innbucks
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_example()
    {
        $instance = Smatpay::getInstance(WalletName::INNBUCKS);

        $definition = new PaymentPayloadBuilder();

        $definition
            ->setAmount(5.00)
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY)
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY)
            ->setPaymentDescription("Test Payment")
            ->setPaymentCurrency("USD")
            ->setPayerName("Rudairo Ngirande")
            ->setPayerReference(substr(str_shuffle("ABCDEFGHIJKLMNOQPRSTUVWXYZ1234567890"), 0, 12))
            ->setPayerAccountId(36)
            ->setProfileId(48);

        $response = $instance->pay($definition, true);
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_enquire_example(string $transactionReference, string $transactionCode)
    {
        $instance = Smatpay::getInstance(WalletName::INNBUCKS);

        $definition = new PaymentEnquireBuilder();

        $definition
            ->setTransactionReference($transactionReference)
            ->setTransactionCode($transactionCode)
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY)
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY);

        $response = $instance->enquire($definition, true);
    }
}
