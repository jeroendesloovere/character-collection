<?php

namespace JeroenDesloovere\CharacterConverter;

// required to load
require_once __DIR__ . '/../vendor/autoload.php';

use JeroenDesloovere\CharacterConverter\Component\CharacterCollection;

class CharacterConverterTest extends \PHPUnit_Framework_TestCase
{
    /** @var CharacterConverter */
    private $characterConverter;

    public function setUp()
    {
        $this->characterConverter = new CharacterConverter();
    }

    public function testCharacters()
    {
        $sentence = 'this is a test';

        $correctResult = new CharacterCollection();
        $correctResult->add(0, 't');
        $correctResult->add(1, 'h');
        $correctResult->add(2, 'i');
        $correctResult->add(3, 's');
        $correctResult->add(4, ' ');
        $correctResult->add(5, 'i');
        $correctResult->add(6, 's');
        $correctResult->add(7, ' ');
        $correctResult->add(8, 'a');
        $correctResult->add(9, ' ');
        $correctResult->add(10, 't');
        $correctResult->add(11, 'e');
        $correctResult->add(12, 's');
        $correctResult->add(13, 't');

        $charactersCollection = $this->characterConverter->convert($sentence);

        $this->assertEquals($correctResult, $charactersCollection);
        $this->assertEquals($sentence, (string) $charactersCollection);
    }
}
