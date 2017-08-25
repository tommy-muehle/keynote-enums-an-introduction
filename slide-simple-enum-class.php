<?php

final class Color
{
    const __DEFAULT = 'black';
    const RED = 'red';

    private $value;

    public function __construct(string $color = null)
    {
        $this->value = $color ?? self::__DEFAULT;
    }

    public function __toString()
    {
        return $this->value;
    }
}