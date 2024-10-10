<?php

namespace Smatpay\Exceptions;

class PaymentGatewayNotFound extends \Exception
{
    public function __construct($message)
    {
        parent::__construct('No smatpay support for ' . $message);
    }
}
