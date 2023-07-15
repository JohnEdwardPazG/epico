<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("select * from epico_items where id=$id ");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="witdh=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Crud Epico</title>
</head>

<body>
    <form class="col-4 p-3 m-auto" method="post">
        <h5 class="text-center alert alert-secondary">Modify Item</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/editar_item.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $datos->name ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category</label>
                <input type="text" class="form-control" name="category" value="<?= $datos->category ?>">
            </div>
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Cost_price</label>
                <input type="double" class="form-control" name="cost_price" value="<?= $datos->cost_price ?>">
            </div>
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Unit_price</label>
                <input type="double" class="form-control" name="unit_price" value="<?= $datos->unit_price ?>">
            </div>
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Pic_filename</label>
                <input type="text" class="form-control" name="pic_filename" value="<?= $datos->pic_filename ?>">
            </div>

        <?php }
        ?>


        <button name=" btnmodificar" value="ok" type="submit" class="btn btn-primary">Modify</button>
    </form>
</body>