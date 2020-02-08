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

    public function testLoadsOfNumbers() {
        $input = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
        $output = \Braddle\FizzBuzz::run($input);

        $this->assertEquals(
            [1,2,"fizz",4,"buzz","fizz",7,8,"fizz","buzz",11,"fizz",13,14,"fizzbuzz"],
            $output
        );
    }


}