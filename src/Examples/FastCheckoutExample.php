<?php

namespace Smatpay\Examples;

use Smatpay\Constants\TestCredentials;
use Smatpay\Definitions\AuthenticationBuilder;
use Smatpay\Definitions\FastCheckoutBuilder;
use Smatpay\Gateway\FastCheckOut ;

class FastCheckoutExample
{
    public function payment_example()
    {
        $fastCheckoutBuilder = new FastCheckoutBuilder();

        $fastCheckoutBuilder
            ->setPaymentLinkName('Test SmatPay')
            ->setPaymentLinkDescription("Description")
            ->setPaymentLinkReference("Reference")
            ->setPaymentLinkAmount(100)
            ->setPaymentLinkType("ONCE_OFF_FIXED")
            ->setPaymentLinkImageType("JPEG")
            ->setPaymentLinkProfileId(123)
            ->setPaymentLinkStartDate("2025-02-07")
            ->setPaymentLinkEndDate("2025-12-31")
            ->setPaymentLinkCurrency("USD")
            ->setPaymentLinkCurrencyId(1)
            ->setPaymentLinkOtherCurrencies(["ZAR", "ZIG"])
            ->setPaymentLinkCustomerRedirectUrl("https://example.com/redirect")
            ->setPaymentCustomerFailRedirectUrl("https://example.com/fail")
            ->setPaymentLinkEmail("customer@example.com")
            ->setPaymentPayerFullNames("John Doe")
            ->setPaymentPayerEmailAddress("johndoe@example.com")
            ->setPaymentPayerAddress("123 Main St, City, Country")
            ->setPaymentPayerMobile("+1234567890")
            ->setPaymentLinkImage("image.jpg");

        $authBuilder = new AuthenticationBuilder();

        $authBuilder
            ->setMerchantKey(TestCredentials::TEST_MERCHANT_KEY)
            ->setMerchantId(TestCredentials::TEST_MERCHANT_ID)
            ->setMerchantApiKey(TestCredentials::TEST_MERCHANT_API_KEY);

        $fastCheckout = new FastCheckOut();

        $response = $fastCheckout->checkout($fastCheckoutBuilder, $authBuilder, true);
    }
}
