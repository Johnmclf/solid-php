<?php

require_once 'MusicTypeInterface.php';
require_once 'InvalidExtensionException.php';

class Ogg implements MusicTypeInterface
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

        if ($extension !== 'ogg') {
            throw new InvalidExtensionException("Fichier Ogg attendu mais ''$extension'' obtenu");
        }

        return 'Lecture du fichier Ogg '. $this->filename;
    }
}
