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

    protected function ecocashBulkTransactionRequest(): array
    {
        return [
            "merchantId" => "1181731916252115",
            "merchantApiKey" => "9b5STaeMvItUcLdumHA1b",
            "merchantKey" => "56d7716a-1166-4e9f-b190-d006a2a0c158",
            "walletName" => "Ecocash",
            "amount" => "1.00",
            "paymentCurrency" => "USD",
            "paymentDescription" => "Tutoring Service",
            "payerName" => "John Smith",
            "payerReference" => $this->getReference(),
            "payerAccountId" => 63,
            "payerMobile" => "263772982812",
            "profileId" => "6287375",
            "dynamicPaidList" => [
                [
                    "dynamicMerchantId" => "1171731914969468",
                    "dynamicPayoutPercentage" => 80
                ],
                [
                    "dynamicMerchantId" => "1181731916252115",
                    "dynamicPayoutPercentage" => 20
                ]
            ]
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
