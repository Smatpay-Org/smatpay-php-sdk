<?php

namespace KTest\unit;

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class InnbucksTest extends CoreTestCase
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function test_pay_request()
    {
        $payload = $this->innbucksPayRequest();

        $innbucksInstance = Smatpay::getInstance(WalletName::INNBUCKS);

        $definition = new PaymentPayloadBuilder($payload);

        $response = $innbucksInstance->pay($definition, true);

        $this->assertEquals('Request successful', $response->paymentInitiationResponse->paymentTokenDescription);

        $this->assertNotNull($response->paymentInitiationResponse->paymentQrCode);

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentCode);

        $this->assertGreaterThan(8, strlen($response->paymentInitiationResponse->paymentCode));

        $this->assertGreaterThan(200, strlen($response->paymentInitiationResponse->paymentQrCode));
    }

    /**
     * @throws PaymentGatewayNotFound
     */
    public function test_enquire_transaction()
    {
        $payload = $this->innbucksEnquireRequest();

        $instance = Smatpay::getInstance(WalletName::INNBUCKS);

        $definition = new PaymentEnquireBuilder($payload);

        $response = $instance->enquire($definition, true);

        $this->assertEquals('Request successful', $response->paymentInitiationResponse->paymentTokenDescription);

        $this->assertNotNull($response->paymentInitiationResponse->paymentQrCode);

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentCode);

        $this->assertGreaterThan(8, strlen($response->paymentInitiationResponse->paymentCode));

        $this->assertGreaterThan(200, strlen($response->paymentInitiationResponse->paymentQrCode));
    }
}
