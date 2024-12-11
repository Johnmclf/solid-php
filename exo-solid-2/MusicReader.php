<?php

class MusicReader
{
    private $musicType;

    public function __construct(MusicType $musicType)
    {
        $this->musicType = $musicType;
    }

    public function listen()
    {
      
        return $this->musicType->listen();
                
    }
}