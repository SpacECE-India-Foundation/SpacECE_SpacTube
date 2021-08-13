<?php

$DBHOST = 'localhost';
$DBUSER = 'ostechnix';
$DBPASS = 'Password123#@!';
$DBNAME = 'gallery2';
$conn;

$conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);
// $conn = mysqli_connect('localhost', 'root', '*A82F3DE193D908186178306A79EF627928F3CDBE', 'gallery');

if($conn)
{
    ?>
    <!-- <script>alert("Connection succesful!");</script> -->
    <?php
}
else{
    die("No Connection!");
    ?>
    <script>alert("Could Not Connection!")</script>
   <?php
}

?>
