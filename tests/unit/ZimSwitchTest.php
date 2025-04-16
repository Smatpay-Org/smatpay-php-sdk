<?php

declare(strict_types=1);

namespace KTest\unit;

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class ZimSwitchTest extends CoreTestCase
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function test_pay_request()
    {
        $payload = $this->zimswitchPayRequest();

        $instance = Smatpay::getInstance(WalletName::ZIMSWITCH);

        $definition = new PaymentPayloadBuilder($payload);

        $response = $instance->pay($definition, true);

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentId);

        $this->assertStringContainsStringIgnoringCase('https', $response->paymentInitiationResponse->paymentRedirectUrl);

        $this->assertEquals('success', strtolower($response->paymentInitiationResponse->status));
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function test_enquire_transaction()
    {
        $payload = $this->zimswitchEnquireRequest();

        $instance = Smatpay::getInstance(WalletName::ZIMSWITCH);

        $definition = new PaymentEnquireBuilder($payload);

        $response = $instance->enquire($definition, true);

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentId);

        $this->assertStringContainsStringIgnoringCase('https', $response->paymentInitiationResponse->paymentRedirectUrl);

        $this->assertEquals('success', strtolower($response->paymentInitiationResponse->status));
    }
}
