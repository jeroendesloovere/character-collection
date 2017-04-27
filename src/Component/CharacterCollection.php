<?php

namespace JeroenDesloovere\CharacterConverter\Component;

class CharacterCollection
{
    /** @var array */
    private $characters;

    /**
     * @param int $position
     * @param string $character
     */
    public function add(int $position, string $character)
    {
        if (!isset($this->characters[$character])) {
            $this->characters[$character] = new Character($character);
        }

        $this->characters[$character]->addPosition($position);
    }

    /**
     * @return string
     */
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
}
