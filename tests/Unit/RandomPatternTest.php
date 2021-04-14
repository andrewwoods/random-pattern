<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use Awoods\RandomPattern\RandomPattern;

class RandomPatternTest extends TestCase
{

    public function testRandomPatternConstruct()
    {
        $obj = new RandomPattern('');

        $this->assertEquals('Awoods\RandomPattern\RandomPattern', get_class($obj));
    }

    public function testIsTokenValidWithInvalidCharacter()
    {
        $pattern = '';
        $token = 'Z';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isTokenValid($token);

        $this->assertFalse($result);
    }

    public function testIsTokenValidWithCharacterA()
    {
        $pattern = '';
        $token = 'A';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsTokenValidWithCharacterC()
    {
        $pattern = '';
        $token = 'C';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsTokenValidWithCharacterD()
    {
        $pattern = '';
        $token = 'D';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsTokenValidWithCharacterX()
    {
        $pattern = '';
        $token = 'X';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isTokenValid($token);

        $this->assertTrue($result);
    }

    public function testIsPatternValidWithOCharacters()
    {
        $pattern = '';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertFalse($result);
    }

    public function testIsPatternValidWith1Character()
    {
        $pattern = 'A';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertTrue($result);

        $pattern = 'Z';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertFalse($result);
    }

    public function testIsPatternValidWith2Characters()
    {
        $pattern = 'AA';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertTrue($result);
    }

    public function testIsPatternValidWithAllBadCharacters()
    {
        $pattern = 'FOG';

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->isPatternValid($pattern);

        $this->assertFalse($result);
    }

    public function testGenerateDigitsForOneDigit()
    {
        $pattern = 'D';

        $randomPattern = new RandomPattern($pattern);
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

        $randomPattern = new RandomPattern($pattern);
        $result = $randomPattern->generate($pattern);

        $this->assertNotEquals('', $result);

        preg_match('/([0-9]{2})/', $result, $matches);

        $this->assertTrue(isset($matches[1]));
    }

}
