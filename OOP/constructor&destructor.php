<?php

class MyConstructor 
{
    function __construct($var = "sandar")
    {
        echo "Untill the day I die I learning programming.".$var;
    }

    function normalMethod($id)
    {
        echo "<br> this is normal method.".$id;
    }

    function __destruct()
    {
        echo "<br> I'm destructor";
    }
}

// new MyConstructor();
// echo " (no need to build obj to call constructor.)<br><br>";

$obj = new MyConstructor(" PPZ");
echo $obj->normalMethod(" hello noob");