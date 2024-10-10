<?php

use Smatpay\Constants\WalletName;
use Smatpay\Definitions\PaymentPayloadBuilder;
use Smatpay\Exceptions\PaymentGatewayNotFound;
use Smatpay\Http\Smatpay;
class ZimSwitchTest extends SmatpayTestCase
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
    }
}
