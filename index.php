<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="witdh=device-width, initial-scale=1.0">
    <title>Crud Epico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5b9af37969.js" crossorigin="anonymous"></script>
</head>
<script>
    function eliminar(){
        var respuesta=confirm("Estas seguro que desear eliminar el item seleccionado?");
        return respuesta
    }
</script>
<body>
    <h1 class="text-center p-3">Epico Items</h1>
    <?php 
    include "modelo/conexion.php";
    include "controlador/eliminar_item.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="post">
            <h3 class="text-center text-secundary">Register Item</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_item.php"
            ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Category</label>
                <input type="text" class="form-control" name="category" aria-describedby="emailHelp">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Cost_price</label>
                <input type="double" class="form-control" name="cost_price" aria-describedby="emailHelp">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Unit_price</label>
                <input type="double" class="form-control" name="unit_price" aria-describedby="emailHelp">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Pic_filename</label>
                <input type="text" class="form-control" name="pic_filename" aria-describedby="emailHelp">
            </div>

            <button name="btnregistrar" value="ok" type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="col-8 p-4">
            <table class="table table-hover table-striped">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">COST_PRICE</th>
                        <th scope="col">UNIT_PRICE</th>
                        <th scope="col">PIC_FILENAME</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from epico_items");
                    while ($datos = $sql->fetch_object()) {
                    ?>

                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->name ?></td>
                            <td><?= $datos->category ?></td>
                            <td><?= $datos->cost_price ?></td>
                            <td><?= $datos->unit_price ?></td>
                            <td><?= $datos->pic_filename ?></td>

                            <td>
                                <a href="editar.php?id=<?= $datos->id ?>" class="btn btn-small btn info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn danger"><i class="fa-solid fa-trash" style="color: #d20f0f;"></i></a>
                            </td>
                        </tr>
                    <?php

                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>