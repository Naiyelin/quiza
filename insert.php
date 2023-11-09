<?php
include_once("conexion.php");

if (isset($_POST["btn"])) {

    if ((isset($_POST["producto"]) && !empty($_POST["producto"]))) {

        if ((isset($_POST["precio"]) && !empty($_POST["precio"])  && is_numeric($_POST["precio"]))) {

            $total = 0;
            $Query = "SELECT SUM(precio) as total FROM inventario";
            $rs = mysqli_query($conn, $Query) or die(mysqli_error($conn));
            $row = mysqli_fetch_array($rs);
            $total = $row['total'];
            echo $total;

            if ($total <= 50000) {
                $producto = $_POST["producto"];
                $precio   = $_POST["precio"];

                $Query = "INSERT INTO inventario (producto, precio) VALUES('$producto', '$precio')";
                echo $Query;
                $rs = mysqli_query($conn, $Query) or die(mysqli_error($conn));

                if ($rs) {
                    header("location: index.php?mgs=1");
                }
            }else{
                header("location: index.php?mgs=2");
            }
        }else{
            header("location: index.php?mgs=4");
        }
    }else{
        header("location: index.php?mgs=3");
    }
}
