<?php 

class Car {
    
/*     static $wheels = 4;
    var $hood = 1; */

  /* pridanie properties do classy: */
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

   function MoveWheels(){ /* zadefinovanie metody v ramci tejto classy */

    echo "Wheels move "; /* vypísanie textu po zavolaní tejto metódy */

    $this->wheels = 10; /* v tejto classe "Cars" zmení počet wheels na 10 */
    
      /* Car -> $wheels = 10; */   
    }  
    
    
    function ChangeDoors(){
      $this->doors = 5; /* v tejo classe zmení počet dverí na 5 */
    }
}

echo "BMW:" . "<br>";
$bmw = new Car(); /* inicializuje classu s názvom "Car" zadefinovanú hore a vloží do objektu "bmw"*/


/* -------------------------------------------------- */
/* CLASS INHERITANCE
classa "Plane" zdedí všetky vlastnosti "Cars" - po použití príkazu "ectends" */

echo "JET:" . "<br>";
class Plane extends Car {   /* classa "Plane" zdedí všetky vlastnosti "Cars" */

}

if (class_exists("Plane")) {
    echo "it does" . "<br>";
}

$jet = new Plane();
echo $jet->wheels . "<br>"; /* vypíše počet kolies rovnaký ako v classe Car */


$jet->wheels = 3; /* zmení wheels na 8 */
echo $jet->wheels . "<br>";

/* dokonca môžeme použiť aj metódu z pôvodnej classy car */
$jet->MoveWheels();
echo $jet->wheels. "<br>". "<br>";

?>