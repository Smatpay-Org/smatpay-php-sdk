<?php

namespace Smatpay\Base;

use Smatpay\Definitions\DefinitionBridge;

abstract class SmatpayDefinition extends DefinitionBridge
{
    public function __construct(array $attributes)
    {
        $this->setAttributes($attributes);
    }
}
