<?php
    session_start();

    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "subject";

    $con = mysqli_connect($servername, $user, $pass, $dbname) or die("try réessayer");

?>