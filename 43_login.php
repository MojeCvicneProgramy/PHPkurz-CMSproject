<?php

if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

    if($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "this field can not be blank";
    }
}

/* vytvorenie napojenia na databázu */
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

/* vloženie dát do databázy - vpíšu sa dáta vložené cez formulár */
    $query = "INSERT INTO users (username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query); 
    /* ako premenné treba zadať spôsob pripojenia aj dáta, ktoré chceme vybrať */
    
    if (!$result) {
        die ('Query FAILED' . mysqli_error()); /* vypíše zadaný text, aj automatický error text */
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
    <form action="43_login.php" method="post"> 
    <!-- táto action pošle dáta do tohto súboru, metódou "post"
    ale treba ich ešte prijať: do superglobal premennej $_POST  -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username"><br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password"><br>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit">
        </div>
    </form>
</div> 
</div> 
</body>
</html>

