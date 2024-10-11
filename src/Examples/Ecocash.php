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
            ->setPayerName("Rudairo Ngirande")
            ->setPayerReference(substr(str_shuffle("ABCDEFGHIJKLMNOQPRSTUVWXYZ1234567890"), 0, 12))
            ->setPayerAccountId(36)
            ->setPayerMobile("0789566427")
            ->setProfileId(48);

        /*
         * See tests/examples/ecocash.json
         * to see the structure of a successful request
         * */

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
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY)
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY);

        $response = $instance->enquire($definition, true);
    }
}
