<?php

namespace unit;

use helpers\SmatpayTestCase;
use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class InnbucksTest extends SmatpayTestCase
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function testCreatePayment()
    {
        $payload = $this->getInnbucksRequest();

        $innbucksInstance = Smatpay::getInstance(WalletName::INNBUCKS);

        $definition = new PaymentPayloadBuilder($payload);

        $response = $innbucksInstance->pay($definition, true);

        $this->assertEquals('Request successful', $response->paymentInitiationResponse->paymentTokenDescription);

        $this->assertNotNull($response->paymentInitiationResponse->paymentQrCode);

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentCode);
    }
}
