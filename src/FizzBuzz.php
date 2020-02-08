<?php

namespace Braddle;

class FizzBuzz
{
    public static function run(array $input)
    {
        for ($i = 0; $i < count($input); $i++) {
            if ($input[$i] % 3 == 0) {
                $input[$i] = "fizz";
            } elseif ($input[$i] % 5 == 0) {
                $input[$i] = "buzz";
            }
        }
        return $input;
    }
}