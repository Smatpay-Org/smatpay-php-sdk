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

    public function getAttributes(): array
    {
        $reflect = new \ReflectionClass($this);
        $props   = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);

        $properties = [];

        foreach ($props as $property) {
            $properties[$property->name] = $this->{$property->name};
        }

        return $properties;
    }

    public function valuesToArray(): array
    {
        $attributes = $this->getAttributes();
        $values     = [];
        foreach ($attributes as $attribute => $defaults) {
            $this->assignValue($attribute, $values);
        }

        return $values;
    }

    private function assignValue($attribute, &$values): void
    {
        $values[$attribute] = $this->{$attribute};
    }


}
