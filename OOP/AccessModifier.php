<?php
class AccessModifier {
    public $one = "public variable"; //everyone can use
    private $two = "private variable"; //usable only inside class
    protected $three = "protected variable"; //usable only inside class and its sub class

    function myfunc() {
       echo $this->two;
       echo "<br>";
       echo $this->three;
    }
}

$obj = new AccessModifier;
echo $obj->one;
echo "<br>";
echo "<hr>";
// echo $obj->two;
// echo $obj->three;

// invoke private variable from inside class pivate
$obj->myfunc();
echo "<br>";
echo "<hr>";


//invoke protected variable from sub class 
class newOne extends AccessModifier {
    function newfunc() {
        echo $this->three;
    }
}

$obj2 = new newOne;
$obj2->newfunc();  