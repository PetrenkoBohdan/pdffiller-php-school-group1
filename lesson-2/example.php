<?php

trait Calculations {
    public function sum() {
        echo 234;
    }


}

trait Calculations2 {
    public function divide() {

    }
}

interface ABC {
    public function calculate();
}

abstract class Currency implements ABC {
    /**
     * http://php.net/manual/en/language.oop5.traits.php
     */
    use Calculations;
//    {
//        Calculations::sum as sum2;
//    }
    use Calculations2;
//    use Calculations2;
    public function sum()
    {
        echo 123;

    }

    public $a = 25;
    protected $b = 15;
    private $c = 10;
    public $code;
    public $amount;

    /**
     * @url http://php.net/manual/en/function.func-get-args.php
     * Currency constructor.
     * @param string $a
     * @param string $b
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

//    abstract function calculate();

    protected function test() {
        return $this->c;
    }
}

/* final */ class USD extends Currency {
    public $code = "USD";

    public $c = 226;

    protected function test() {
        return "123";
    }

    public function hello() {
        return $this->test();
    }

    /**
     * http://php.net/manual/en/language.oop5.magic.php#object.tostring
     * @return string
     */
    public function __toString()
    {
        return $this->amount.' '.$this->code;
    }

    function calculate()
    {
        return 'I am USD';
    }
}
class UAH extends USD {

    function calculate()
    {
        return 'I am UAH (гривна)';
    }


}


/** @var ABC[] $obj */
$obj = [];
$obj[0] = new USD(15);
$obj[1] = new UAH(15);

foreach ($obj as $k => $v) {
    echo $v->calculate().PHP_EOL;
}


//echo $obj->sum();




function test($example) {
    $example = 15;
}

function test1($example) {
    $example->b = 5;
}


class A {
    ///
}

class B extends A {
    ///
}

class C extends B {
    ///////
}

//
//test($obj);
//
//echo $obj->b; // ? 25
//
//test1($obj);
//
//echo $obj->b; // ? 5
