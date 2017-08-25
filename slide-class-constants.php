<?php

class StateHandler
{
    const STATE_ACTIVE = 'active';
    const STATE_CANCELED = 'canceled';

    public function handle($state)
    {
        if ($state !== self::STATE_ACTIVE) {
            // ...
        }

        // ...
    }
}