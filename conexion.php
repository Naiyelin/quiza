<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "tarea1";

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Error: ". mysqli_connect_error();
}

date_default_timezone_set("America/Caracas");

?>