<?php

namespace JeroenDesloovere\CharacterCollection;

class CharacterCollection
{
    /** @var array */
    private $characters;

    /**
     * @param string $sentence
     */
    public function __construct(string $sentence)
    {
        /** @var array $characters */
        $characters = str_split($sentence);

        foreach ($characters as $position => $character) {
            $this->add($position, $character);
        }
    }

    /**
     * @param int $position
     * @param string $character
     */
    public function add(int $position, string $character)
    {
        if ($character === '') {
            return;
        }

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
