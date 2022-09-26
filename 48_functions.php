<?php 

include "48_db.php";
/* napojenie na databázu je v súbore "48_db.php", tak aby to fungovalo, musíme ho zahrnúť sem */


/* zadefinovanie funkcie, do ktorej vložíme všetky funkcionality, ktoré potrebujeme pre "48_update_database" */
function showAllData() {

    global $connection; 
    /* connection musí byť global, inak to nebude fungovať
    ukazovalo by okienka username a password, ale select by nezobrazovalo správne a tlačítko vôbec */

/* vyberieme všetko z tabuľky users */
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query FAILED' . mysqli_error());
    }


    while($row = mysqli_fetch_assoc($result)){ /* kým existuje niečo v assoc array */
        $id = $row['ID']; 
        /* nájde ID v array a použijeme to ako dynamic value ďalej. 
        'ID' treba dať veľkým ak je v databáze označenie tohto stĺpca veľkým písmom,
        inak bude zobrazovať nejaký výber, ale nebude tam nič napísané */

        echo "<option value='$id'>$id</option>";

    }
}

function updateData(){

if (isset($_POST['submit'])) {
    $username = $_POST['username']; /* hodnota zadaná vo formulári */
    $password =  $_POST['password'];
    $id =  $_POST['id'];
    
    $query = "UPDATE users SET "; /* za SET musí byť medzera */
    $query .= "username = '$username' "; /* hodnotu v databáze aktualizujeme hodnotou zadanou vo formulári */
    $query .= "password = '$password' ";
    $query .= "WHERE ID = $id "; /* okolo $id netreba uvodzovky, lebo to nie je string, ale integer */
    
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query failed!" . mysqli_error($connection));
        }
    }
}
?>