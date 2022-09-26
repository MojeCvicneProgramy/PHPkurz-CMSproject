<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $x = "outside"; /* global */
 function convert(){
    global $x; /* pridaná "global" variable, teraz už bude funkcia fungovať */
    $x = "inside"; /* local */
 };
 echo $x . "<br>";
 convert(); /* toto nespraví nič, 2x vypíše "outside, lebo nám chýba "global" variable v tejto funkcii*/
 echo $x . "<br>";
echo "------------------" . "<br>";


 function double(){
    global $x; /* pridaná "global" variable aj v tejto funkcii, teraz už bude funkcia fungovať */
    $x = "outside"; /* local */
 };
 echo $x . "<br>";
 double(); /* toto nespraví nič, 2x vypíše "inside, keď nám chýba "global" variable v tejto funkcii*/
 echo $x . "<br>";

?>
</body>
</html>