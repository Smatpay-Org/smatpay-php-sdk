<?php

namespace KTest\unit;

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class EcocashTest extends CoreTestCase
{
    /**
     * @throws PaymentGatewayNotFound
     */
    public function testCreatePayment()
    {
        $payload = $this->getEcocashRequest();

        $instance = Smatpay::getInstance(WalletName::ECOCASH);

        $definition = new PaymentPayloadBuilder($payload);

        $response = $instance->pay($definition, true);

        $this->assertEquals('success', strtolower($response->paymentInitiationResponse->status));

        $this->assertNotNull($response->paymentInitiationResponse->paymentId);

        $this->assertStringContainsStringIgnoringCase('prompt', $response->paymentInitiationResponse->paymentTokenDescription);
    }
}
