<?php

namespace Smatpay\Definitions;

class DefinitionBridge
{
    protected function setAttributes($attributes): void
    {
        foreach ($attributes as $name => $value) {
            $value = empty($value) === true ? '' : $value;
            $value = ( ! is_array($value) && strlen($value) == 0) ? null : $value;
            if (property_exists($this, $name)) {
                $this->{$name} = $value;
            }
        }
    }
}
