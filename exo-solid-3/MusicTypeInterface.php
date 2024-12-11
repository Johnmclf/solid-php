<?php
// MusicTypeInterface.php
interface MusicTypeInterface
{
    public function listen();
    public function getFilename(): string;
}
