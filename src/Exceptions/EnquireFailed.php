<?php

namespace Smatpay\Exceptions;

class EnquireFailed extends \Exception
{
    public function __construct($message)
    {
        parent::__construct('Transaction processing failed' . $message);
    }
}
