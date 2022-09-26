<?php

/* vytvorenie napojenia na databázu */
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }
 
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query FAILED' . mysqli_error());
    }


?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="col-xs-6">
<?php
/* zobrazenie dát z databázy */
/* while ($row = mysqli_fetch_row($result)) {
    print_r($row);
} */

/* výsledok: 
We are connected
Array ( [0] => 1 [1] => Petra [2] => superman ) Array ( [0] => 2 [1] => Pavol [2] => superhero ) Array ( [0] => 5 [1] => [2] => )
*/

/* zobrazenie dát z databázy ako associative array */
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre> <!-- pomocou tohto naformátuje pekne výsledný array -->
        <?php    
            print_r($row);
        ?>
    </pre>
    <?php
}
?>
</div> 
</div> 
</body>
</html>

