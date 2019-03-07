<?php

interface MarvelInterface
{
    public function makeHero();
}

class Hero implements MarvelInterface {
    public function makeHero()
    {
        echo "Ionman! <br>";
    }
}
class Vilain implements MarvelInterface {
    public function makeHero()
    {
        echo "Thanos! <br>";
    }
}

$obj = new Hero;
$obj->makeHero();

$obj1 = new Vilain;
$obj1->makeHero();

?>
<!-- all the methods specified in an interface require public visibility -->

<!-- with interface you can define what your class does.And if someone tries to implement without doing those things, a well define errors occurs -->

<!-- when you want to use same functionality again and again then this interfaces are very useful! -->