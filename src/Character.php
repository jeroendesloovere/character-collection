<?php

namespace JeroenDesloovere\CharacterCollection;

class Character
{
    /** @var string */
    private $value;

    /** @var array */
    private $positions;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $position
     */
    public function addPosition(int $position)
    {
        $this->positions[] = $position;
    }

    /**
     * @return array
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
