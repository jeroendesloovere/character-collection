<?php

namespace JeroenDesloovere\CharacterCollection;

class Character
{
    /** @var string */
    private $value;

    /** @var array */
    private $positions;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function addPosition(int $position)
    {
        $this->positions[] = $position;
    }

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
