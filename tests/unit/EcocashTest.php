<?php

namespace KTest\unit;

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class EcocashTest extends CoreTestCase
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function test_pay_request()
    {
        $payload = $this->ecocashPayRequest();

        $instance = Smatpay::getInstance(WalletName::ECOCASH);

        $definition = new PaymentPayloadBuilder($payload);

        $response = $instance->pay($definition, true);

        $this->assertEquals('success', strtolower($response->paymentInitiationResponse->status));

        $this->assertNotNull($response->paymentInitiationResponse->paymentId);

        $this->assertStringContainsStringIgnoringCase('prompt', $response->paymentInitiationResponse->paymentTokenDescription);
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function test_enquire_transaction()
    {
        $payload = $this->ecocashEnquireRequest();

        $instance = Smatpay::getInstance(WalletName::ECOCASH);

        $definition = new PaymentEnquireBuilder($payload);

        $response = $instance->enquire($definition, true);

        $this->assertEquals('success', strtolower($response->paymentInitiationResponse->status));

        $this->assertNotNull($response->paymentInitiationResponse->paymentId);

        $this->assertStringContainsStringIgnoringCase('prompt', $response->paymentInitiationResponse->paymentTokenDescription);
    }
}
