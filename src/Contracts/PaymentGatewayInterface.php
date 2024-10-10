<?php

namespace Smatpay\Contracts;

interface PaymentGatewayInterface
{
    public function pay(array $payload);

    public function enquire($transaction);
}
