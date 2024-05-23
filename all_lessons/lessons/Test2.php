<?php

namespace lessons;

use lessons\Math;
use lessons\Validator;

class Test2
{
    use Math, Validator {
        Math::sameMethod insteadof Validator;
        Validator::sameMethod as sameMethod2;
    }

    public function test()
    {
        $this->sameMethod();
        $this->sameMethod2();
        echo $this->sum(5, 5) . PHP_EOL;
    }
}