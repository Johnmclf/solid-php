<?php

require_once 'MusicTypeInterface.php';
require_once 'InvalidExtensionException.php';

class Mp3 implements MusicTypeInterface
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function listen()
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);

        if ($extension !== 'mp3') {
            throw new InvalidExtensionException("Fichier Mp3 attendu mais ''$extension'' obtenu");
        }

        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}
