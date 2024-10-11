<?php

declare(strict_types=1);

namespace unit;

use PHPUnit\Framework\TestCase;
use Smatpay\Constants\TestCredentials;
use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class ZimSwitchTest extends TestCase
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function testCreatePayment()
    {
        $payload = $this->getZimSwitchRequest();

        $instance = Smatpay::getInstance(WalletName::ZIMSWITCH);

        $definition = new PaymentPayloadBuilder($payload);

        $response = $instance->pay($definition, true);

        dd($response);

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentId);
    }

    protected function getInnbucksRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "paymentDescription" => "School Fees FullPayment",
            "amount" => "1.00",
            "paymentCurrency" => "USD",
            "payerName" => "Farai Roberts",
            "payerReference" => $this->getReference(),
            "payerAccountId" => TestCredentials::TEST_PAYER_ACCOUNT_ID,
            "profileId" => TestCredentials::TEST_PROFILE_ID
        ];
    }

    protected function getEcocashRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "paymentDescription" => "School Fees FullPayment",
            "amount" => "2.00",
            "paymentCurrency" => "USD",
            "payerName" => "Udean Mlambo",
            "payerMobile" => "0772982812",
            "payerReference" => $this->getReference(),
            "payerAccountId" => TestCredentials::TEST_PAYER_ACCOUNT_ID,
            "profileId" => TestCredentials::TEST_PROFILE_ID
        ];
    }

    protected function getZimSwitchRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "paymentDescription" => "School Fees FullPayment",
            "amount" => "2.00",
            "paymentCurrency" => "USD",
            "payerName" => "Faison Kagame",
            "payerMobile" => "0772982812",
            "payerReference" => $this->getReference(),
            "payerAccountId" => TestCredentials::TEST_PAYER_ACCOUNT_ID,
            "profileId" => TestCredentials::TEST_PROFILE_ID
        ];
    }

    private function getReference(): string
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 18);
    }
}
