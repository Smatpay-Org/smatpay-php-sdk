<?php

namespace KTest\unit;

use KTest\unit\CoreTestCase;
use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;

class InnbucksTest extends CoreTestCase
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

        $this->assertGreaterThan(8, strlen($response->paymentInitiationResponse->paymentCode));

        $this->assertGreaterThan(200, strlen($response->paymentInitiationResponse->paymentQrCode));
    }
}
