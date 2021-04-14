<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use Awoods\RandomPattern\RandomPattern;

class RandomPatternTest extends TestCase
{

    public function testRandomPatternConstruct()
    {
        $obj = new RandomPattern();

        $this->assertEquals('Awoods\RandomPattern\RandomPattern', get_class($obj));
    }

    public function testIsTokenValidWithInvalidCharacter()
    {
        $token = 'Z';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isTokenValid($token);

        $this->assertFalse($result);
    }

    public function testIsTokenValidWithCharacterA()
    {
        $token = 'A';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsTokenValidWithCharacterC()
    {
        $token = 'C';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsTokenValidWithCharacterD()
    {
        $token = 'D';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsTokenValidWithCharacterX()
    {
        $token = 'X';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsPatternValidWithOCharacters()
    {
        $pattern = '';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertFalse($result);
    }

    public function testIsPatternValidWith1Character()
    {
        $pattern = 'A';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertTrue($result);

        $pattern = 'Z';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertFalse($result);
    }

    public function testIsPatternValidWith2Characters()
    {
        $pattern = 'AA';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertTrue($result);
    }

    public function testIsPatternValidWithAllBadCharacters()
    {
        $pattern = 'FOG';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertFalse($result);
    }

    public function testGenerateDigitsForOneDigit()
    {
        $pattern = 'D';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([0-9])/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
        $this->assertGreaterThanOrEqual(0, $matches[1]);
        $this->assertLessThanOrEqual(9, $matches[1]);
    }

    public function testGenerateDigitsForTwoDigits()
    {
        $pattern = 'DD';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([0-9]{2})/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
    }

    public function testGenerateAlphbeticValueForOneCharacter()
    {
        $pattern = 'A';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([A-Z]{1})/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
    }

    public function testGenerateAlphbeticValueForTwoCharacters()
    {
        $pattern = 'AA';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([A-Z]{2})/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
    }

    public function testGenerateAlphbeticValueForEightCharacters()
    {
        $pattern = 'AAAAAAAA';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([A-Z]{8})/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
    }

    public function testGenerateAlphbeticDigitComboForEightCharacters()
    {
        $pattern = 'ADADADDA';

        $randomPattern = new RandomPattern();
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([A-Z][0-9][A-Z][0-9][A-Z][0-9][0-9][A-Z])/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
    }

}
