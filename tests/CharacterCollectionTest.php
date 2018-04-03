<?php

namespace JeroenDesloovere\CharacterCollection;

use PHPUnit\Framework\TestCase;

class CharacterCollectionTest extends TestCase
{
    /** @var CharacterCollection */
    private $correctResult;

    /** @var string */
    private $sentence;
    
    public function setUp()
    {
        $this->sentence = 'this is a test';

        $this->correctResult = new CharacterCollection('');
        $this->correctResult->add(0, 't');
        $this->correctResult->add(1, 'h');
        $this->correctResult->add(2, 'i');
        $this->correctResult->add(3, 's');
        $this->correctResult->add(4, ' ');
        $this->correctResult->add(5, 'i');
        $this->correctResult->add(6, 's');
        $this->correctResult->add(7, ' ');
        $this->correctResult->add(8, 'a');
        $this->correctResult->add(9, ' ');
        $this->correctResult->add(10, 't');
        $this->correctResult->add(11, 'e');
        $this->correctResult->add(12, 's');
        $this->correctResult->add(13, 't');
    }
    
    public function testCharacters()
    {
        $charactersCollection = new CharacterCollection($this->sentence);

        $this->assertEquals($this->correctResult, $charactersCollection);
        $this->assertEquals($this->sentence, (string) $charactersCollection);

        $this->assertEquals([0, 10, 13], $charactersCollection->get('t')->getPositions());
    }
}
