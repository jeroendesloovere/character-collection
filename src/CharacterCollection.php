<?php

namespace JeroenDesloovere\CharacterCollection;

class CharacterCollection
{
    /** @var array */
    private $characters;

    public function __construct(string $sentence)
    {
        /** @var array $characters */
        $characters = str_split($sentence);

        foreach ($characters as $position => $character) {
            $this->add($position, $character);
        }
    }

    public function __toString(): string
    {
        $sentences = [];
        foreach ($this->characters as $position => $character) {
            foreach ($character->getPositions() as $position) {
                $sentences[$position] = $character->getValue();
            }
        }

        ksort($sentences);

        return implode($sentences);
    }

    public function add(int $position, string $character): void
    {
        if ($character === '') {
            return;
        }

        if (!isset($this->characters[$character])) {
            $this->characters[$character] = new Character($character);
        }

        $this->characters[$character]->addPosition($position);
    }

    public function get(string $character): Character
    {
        if (!array_key_exists($character, $this->characters)) {
            throw Exception::characterNotFound($character);
        }

        return $this->characters[$character];
    }
}
