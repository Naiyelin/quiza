<?php

include_once("conexion.php");

$Query = "SELECT * FROM inventario";
$rs = mysqli_query($conn, $Query) or die(mysqli_error($conn));
$count = mysqli_num_rows($rs);

?>