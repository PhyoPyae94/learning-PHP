<?php 
class carType {

    var $color = " black";
    var $weapon;
    function myFunc() {
        $var = "Tank";
        echo $var;
    }
}
//we can't call the function in oop like this. => myFunc();

$army = new carType();  //1st u need to create new object($army) to invoke class.
$army->myFunc();        // after that object get properties of class and can call function(method).

echo $army->color;      // you can call variable like this.

$army->weapon=" Machine-gun"; //you can declare variable before we use it.
echo $army->weapon;

echo "<hr>";

$police = new carType();   //you can build one more instant object
$police->myFunc();
echo $army->color;
  

