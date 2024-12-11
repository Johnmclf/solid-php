<?php
require_once 'InvalidExtensionException.php';
require_once 'UnknownExtensionException.php';
require_once 'MusicTypeInterface.php';

class MusicReader
{
    private $musicType;

    public function __construct(MusicTypeInterface $musicType)
    {
        $this->musicType = $musicType;

        $extension = pathinfo($this->musicType->getFilename(), PATHINFO_EXTENSION);

        if (empty($extension)) {
            throw new UnknownExtensionException('Les fichiers sans extension ne sont pas acceptés.');
        }
    }

    public function listen()
    {
        return $this->musicType->listen();
    }
}
