<?php include "48_db.php"; ?>
<!-- napojenie na databázu je v súbore "48_db.php", tak aby to fungovalo, musíme ho zahrnúť sem  -->

<?php include "48_functions.php"; ?>
<!-- napojenie na funkciu aby to fungovalos
v súbore s funkciou musí byť napojenie na databázu, inak nebude tiež fungovať -->



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
<form action="48_update_database.php" method="post"> 
    <!-- Pozor aby tu bol vpísaný správny súbor!  -->

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
            <select name="id" id="" class="">
            <?php
                showAllData(); /* funkcia z pripojeného súboru "48_functions.php" */
                updateData();
            ?>
            </select>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </div>
    </form>
</div> 
</div> 
</body>
</html>

