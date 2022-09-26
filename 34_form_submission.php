<?php

function validation(){
    /* tento kod by sa opakoval 2x v dvoch if-statementoch, 
    tak som ho vložila do funkcie a použila dole. Treba použiť aj global variable aby to fungovalo */
    global $username, $password, $minimum, $maximum;
    if (strlen($username) < $minimum){
        echo "Username has to be at least " . $minimum . " characters";
    }
    elseif (strlen($username) > $maximum){
        echo "Username has to be less than " . $maximum . " characters";
    }
    else {
        /* vypísanie hodnôt zadaných vo formulári */
        echo "Welcome " . $username;
        echo ", your password is: " . $password;
    }
}



if (isset($_POST['submit'])) {
/* ak existuje $_POST čiže bol stlačený submit button,
prijmu sa hodnoty z formulára vo forme associative array keys
a vypíše "yes, it works" s z funkcie*/
echo "Yes, the form works. ";
$username = $_POST['username'];
$password = $_POST['password'];

/* form validation: */

$name = array("Edwin", "Maria", "Leon", "Jane", "Andrej", "Pavol", "Katarina");
$minimum = 2;
$maximum = 10;

if (in_array($username, $name)){
    echo "Hey admin! ";
    validation();
} else {
    echo "You are not admin! ";
    validation();
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="34_form_submission.php" method="post"> 
    <!-- táto action pošle dáta do tohto súboru, metódou "post"
    ale treba ich ešte prijať: do superglobal premennej $_POST  -->
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>