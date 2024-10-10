<?php

namespace Smatpay\Exceptions;

class TokenGenerationFailed extends \Exception
{
    public function __construct($message)
    {
        parent::__construct('Token generation failed. '.$message);
    }
}
