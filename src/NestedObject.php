<?php

namespace WoutVW;

class NestedObject
{
    protected $data = [];

    public function __construct($input = null)
    {
        $this->data = $input;
    }

    public function __get($name)
    {
        if (!isset($this->data[$name])) {
            return null;
        }
        $value = $this->data[$name];
        // Only instantiate NestedObject when accessing nested objects or arrays
        if (is_array($value) && self::isAssociative($value)) {
            return new self($value);
        }
        return $value;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function toArray()
    {
        return $this->data;
    }

    // Helper function inside the class
    protected static function isAssociative(array $array)
    {
        return count(array_filter(array_keys($array), 'is_string')) > 0;
    }
}
