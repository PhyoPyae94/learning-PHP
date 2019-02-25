<?php

class MyStatic
{
    public $name = 'Mg Mg';
    public static $age = '25';

    static function myMethod() {
        echo"Hello Noob";
        echo self::$age;  //self keyword can use only inside class
    }
}

$obj = new MyStatic;
echo $obj->name;
// echo $obj->age; // You can't call static variable like this,
echo "<br>";
echo $obj::$age;
echo "<br>";


$obj::myMethod();
echo "<br>";  //can access both -> and :: operator
$obj->myMethod();
echo "<br>";
echo MyStatic::$age;
echo "<br>";
echo MyStatic::myMethod(); //you can also access from class with :: operator
