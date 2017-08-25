<?php

final class Color
{
    // ...
    protected $value;
    // ...

    final public function value()
    {
        return $this->value;
    }

    public function equals(Color $color)
    {
        // or any other business condition
        return $this->value === $color->value();
    }
}