<?php

namespace Smatpay\Examples;

use Smatpay\Constants\TestCredentials;
use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class Mastercard
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_example()
    {
        $instance = Smatpay::getInstance(WalletName::MASTERCARD);

        $definition = new PaymentPayloadBuilder();

        $prefix = strtolower(substr(str_shuffle("ABCDEFGHIJKLMNOQPRSTUVWXYZ1234567890"), 0, 3));

        $definition
            ->setAmount(5.00)
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY)
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY)
            ->setPaymentDescription("Test Payment")
            ->setPaymentCurrency("USD")
            ->setPayerName("Rudairo Ngirande")
            ->setPayerReference(uniqid($prefix))
            ->setPayerAccountId(36)
            ->setProfileId(48);

        $response = $instance->pay($definition, true);
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function payment_enquire_example(string $transactionReference)
    {
        $instance = Smatpay::getInstance(WalletName::MASTERCARD);

        $definition = new PaymentEnquireBuilder();

        $definition
            ->setTransactionReference($transactionReference)
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY)
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY);

        $response = $instance->enquire($definition, true);
    }
}
