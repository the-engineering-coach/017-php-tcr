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


}