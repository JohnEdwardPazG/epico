<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["name"]) and !empty($_POST["category"]) and  !empty($_POST["cost_price"]) and  !empty($_POST["unit_price"]) and !empty($_POST["pic_filename"])) {

        $name = $_POST["name"];
        $category = $_POST["category"];
        $cost_price = $_POST["cost_price"];
        $unit_price = $_POST["unit_price"];
        $pic_filename = $_POST["pic_filename"];

        $sql = $conexion->query(" insert into epico_items(name,category,cost_price,unit_price,pic_filename)values('$name','$category','$cost_price','$unit_price','$pic_filename')");
        if ($sql == 1) {
            echo '<div class= "alert alert-success">Item registrado correctamente</div';
        } else {
            echo '<div class= "alert alert-danger">Error, Por favor digite todos los campos</div';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div';
    }
}
