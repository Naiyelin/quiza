<?php

if (isset($_GET['mgs']) && !empty($_GET['mgs'])) {
    $key = $_GET['mgs'];

    switch ($key) {
        case 0:
            echo '<div class="alert alert-warning" role="alert"> No hay Productos Registrados </div>';
            break;
        case 1:
            echo '<div class="alert alert-success" role="alert"> Producto Registrado </div>';
            break;
        case 2:
            echo '<div class="alert alert-danger" role="alert"> No Puede superar el limite total de los Precios </div>';
            break;
        case 3:
            echo '<div class="alert alert-danger" role="alert"> Campo de Producto Vacio </div>';
            break;
        case 4:
            echo '<div class="alert alert-danger" role="alert"> Campo de Precio Vacio  o no es un número </div>';
            break;
        default:
            # code...
            break;
    }
} else {
    echo '<div class="alert alert-warning" role="alert"> No hay Productos Registrados </div>';
}
