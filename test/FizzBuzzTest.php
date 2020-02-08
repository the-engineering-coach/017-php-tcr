<?php

namespace Braddle;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testJustNumbers()
    {
        $input = [1,2,4];
        $output = \Braddle\FizzBuzz::run($input);

        $this->assertEquals($input, $output);
    }

    public function testFizzNumbers()
    {
        $input = [3,6,9];
        $output = \Braddle\FizzBuzz::run($input);

        $this->assertEquals(["fizz", "fizz", "fizz"], $output);
    }

    public function testBuzzNumbers()
    {
        $input = [5,10,20];
        $output = \Braddle\FizzBuzz::run($input);

        $this->assertEquals(["buzz", "buzz", "buzz"], $output);
    }


}