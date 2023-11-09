<?php
    include_once("select.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">


        <h3 class="text-center">Quiz Tipo A</h3>
        <p>Desarrollar una Aplicación Web, que permita registrar un producto y su monto, el monto no puede ser mayor a
            3500Bs. Luego, se debe registrar tantos productos sean posibles, teniendo como limite, que el monto total de
            los productos sea 50,000Bs, es decir, el monto total no debe superar los 50,000Bs. Mostrar la cantidad de
            productos que fueron registrados en el inventario.</p>

        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($count > 0){
                            while($row = mysqli_fetch_array($rs)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['producto']; ?></td>
                            <td><?php echo $row['precio']; ?></td>
                        </tr>
                        <?php } }else{ $mgs=0; ?>

                        <tr>
                            <th colspan="3">
                                <div class="alert alert-warning" role="alert"> 
                                    No hay Productos Registrados 
                                </div>
                            </th>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
  
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Inventario</h5>
                        <p class="card-text">
                        <form action="insert.php" method="post">
                            <div class="mb-3 row">
                                <label for="productosID" class="form-label">Producto:</label>
                                <input type="text" id="productosID" name="producto" class="form-control">
                            </div>
                            <div class="mb-3 row">
                                <label for="precioID" class="form-label">Precio:</label>
                                <input type="text" id="precioID" name="precio" class="form-control">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3" name="btn">Registrar</button>
                            </div>
                        </form>
                        </p>
                    </div>
                <?php
                    require('mensajes.php');
                ?>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>