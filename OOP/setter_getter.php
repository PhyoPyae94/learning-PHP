 <?php

include('another.php');

 class Setter_Getter extends Another
 {
    private $name = 'mg mg';


    public function getter() {
        return $this->name;
    }

    function setter($var) {
        $this->name = $var;
        return $this->name;
    }

    function setter1() {
        return $this->name = "sandar is ".$this->Sandar();
    }
 }

 $obj = new Setter_Getter();
 echo $obj->getter();

 echo "<br>";

 $obj1 = new Setter_Getter();
 echo $obj1->setter("Htike");

 echo "<br>";

 $obj2 = new Setter_Getter();
 echo $obj2->setter1();