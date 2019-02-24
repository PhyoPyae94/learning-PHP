<?php

class MarvelHero{
    var $name;
    var $power;

    function myfunc() {
        echo $this->name = "Doctor Strange";
        echo " ";
        echo $this->power = "Time Traveller";
        //we cant call the variable inside the method directly (echo $name)
        //use $this to call , $this reprensent class name you define.
    }
}

$newHero = new MarvelHero();
$newHero->myfunc();

