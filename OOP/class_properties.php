<?php

class One {
    var $name;
    var $age;
    var $carrer;

    function person() {
        echo "Name is ".$this->name." and age is ".$this->age.".";
    }
}

$he = new One();
$he->name = "Mg Mg";
$he->age  = "25";
$he-> person();

echo"<br>";

$she = new One();
$she->name = "Mya Mya";
$she->age  = "24";
$she-> person();
