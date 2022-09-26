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
echo $bmw->wheels . "<br>"; /* vypíše počet wheels, použije property z "Car" */

$bmw->MoveWheels(); /* spustí metodu MoveWheels v tejto novej classe, čiže vypíše text a wheels bude 10 */
echo $bmw->wheels . "<br>";

$bmw->wheels = 8; /* zmení wheels na 8 */
echo $bmw->wheels . "<br>". "<br>";


echo "Truck:" . "<br>";
$truck = new Car();
echo $bmw->doors . "<br>";

$truck->ChangeDoors();
echo $truck->doors . "<br>";
?>