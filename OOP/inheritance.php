<?php
class Inheritance_Sample
{
    function myfunc() {
        return 10;
    }
}

class NewOne extends Inheritance_Sample
{
   
}

$obj = new NewOne;
echo $obj->myfunc();

 // call Inheritance_Sample = Super Class
// call NewOne = Sub Class