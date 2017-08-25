<?php

final class Color
{
    // ...
    public function __construct(string $color = null)
    {
        $value = $color ?? self::__DEFAULT;

        if (!in_array($value, $this->all(), true)) {
            // ...
        }

        $this->value = $value;
    }

    public function all() : array
    {
        return (new \ReflectionClass(static::class))->getConstants();
    }
    // ...
}