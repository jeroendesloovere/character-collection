<?php

namespace JeroenDesloovere\CharacterConverter;

use JeroenDesloovere\CharacterConverter\Component\CharacterCollection;

class CharacterConverter
{
    public function convert(string $sentence): CharacterCollection
    {
        $characterCollection = new CharacterCollection();

        /** @var array $characters */
        $characters = str_split($sentence);

        foreach ($characters as $position => $character) {
            $characterCollection->add($position, $character);
        }

        return $characterCollection;
    }
}
