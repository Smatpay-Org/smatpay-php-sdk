<?php

declare(strict_types=1);

namespace KTest\unit;

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;
use KTest\unit\CoreTestCase;

class ZimSwitchTest extends CoreTestCase
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

        $this->assertNotEmpty($response->paymentInitiationResponse->paymentId);

        $this->assertStringContainsStringIgnoringCase('https', $response->paymentInitiationResponse->paymentRedirectUrl);

        $this->assertEquals('success', strtolower($response->paymentInitiationResponse->status));
    }
}
