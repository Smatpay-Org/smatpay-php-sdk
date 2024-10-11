<?php

namespace KTest\unit;

use PHPUnit\Framework\TestCase;
use Smatpay\Constants\TestCredentials;

abstract class CoreTestCase extends TestCase
{
    protected function innbucksPayRequest(): array
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

    protected function innbucksEnquireRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "transactionReference" => "DFJG6KTRY894Q2HN0O",
            "transactionCode" => "701529190",
        ];
    }

    protected function ecocashPayRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "paymentDescription" => "School Fees FullPayment",
            "amount" => "2.00",
            "paymentCurrency" => "USD",
            "payerName" => "Udean Mlambo",
            "payerMobile" => "0789566427",
            "payerReference" => $this->getReference(),
            "payerAccountId" => TestCredentials::TEST_PAYER_ACCOUNT_ID,
            "profileId" => TestCredentials::TEST_PROFILE_ID
        ];
    }

    protected function ecocashEnquireRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "transactionReference" => "NOY2LXE3RS8179FT6G",
            "paymentMobile" =>"0789566427",
        ];
    }

    protected function zimswitchPayRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "paymentDescription" => "School Fees FullPayment",
            "amount" => "2.00",
            "paymentCurrency" => "USD",
            "payerName" => "Faison Kagame",
            "payerMobile" => "0789566427",
            "payerReference" => $this->getReference(),
            "payerAccountId" => TestCredentials::TEST_PAYER_ACCOUNT_ID,
            "profileId" => TestCredentials::TEST_PROFILE_ID
        ];
    }

    protected function zimswitchEnquireRequest(): array
    {
        return [
            "merchantId" => TestCredentials::TEST_MERCHANT_ID,
            "merchantApiKey" => TestCredentials::TEST_MERCHANT_API_KEY,
            "merchantKey" => TestCredentials::TEST_MERCHANT_KEY,
            "transactionReference" => "Z4X7VH180J2OT6SYQD",
        ];
    }

    private function getReference(): string
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 18);
    }
}
