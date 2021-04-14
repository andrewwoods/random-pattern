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

}
