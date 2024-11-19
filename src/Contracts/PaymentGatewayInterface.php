<?php

namespace Smatpay\Contracts;

use Smatpay\Definitions\PaymentEnquireBuilder;
use Smatpay\Definitions\PaymentPayloadBuilder;

interface PaymentGatewayInterface
{
    public function pay(PaymentPayloadBuilder $payload, bool $isSandbox);

    public function enquire(PaymentEnquireBuilder $payload, bool $isSandbox);

    public function bulk(PaymentEnquireBuilder $payload, bool $isSandbox);
}
