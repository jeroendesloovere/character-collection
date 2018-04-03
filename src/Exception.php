<?php

namespace JeroenDesloovere\CharacterCollection;

class Exception extends \Exception
{
    public static function characterNotFound(string $character): \Exception
    {
        return new self('Character ' . $character . ' not found.');
    }
}
