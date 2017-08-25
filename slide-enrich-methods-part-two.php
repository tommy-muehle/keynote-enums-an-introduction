<?php

final class Color
{
    // ...
    protected $value;
    // ...

    public static function fromHex(string $hex)
    {
        // do something with $hex and get $color
        return new self($color);
    }

    public function format()
    {
        return 'My special color format';
    }
}