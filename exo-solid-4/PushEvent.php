<?php

class PushEvent implements NonActionnableEventInterface
{
    public function name() : string
    {
        return 'PushEvent';
    }

    public function fields() : array
    {
        return [
            'name' => $this->name,
            'priority' => 999,
        ];
    }

    public function payload() : array
    {
        return [
            'cost' => 0,
            'from' => 'https://github.com/api/v3/push',
        ];
    }
}


