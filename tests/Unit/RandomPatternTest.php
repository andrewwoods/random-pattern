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

}
