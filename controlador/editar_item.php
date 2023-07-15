<?php 
if(!empty($_POST["btnmodificar"])){
    if(!empty($_POST["name"]) and !empty($_POST["category"]) and !empty($_POST["cost_price"]) and !empty($_POST["unit_price"]) and !empty($_POST["pic_filename"])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $category = $_POST["category"];
        $cost_price = $_POST["cost_price"];
        $unit_price = $_POST["unit_price"];
        $pic_filename = $_POST["pic_filename"];
        $sql=$conexion->query(" update epico_items set name='$name', category='$category', cost_price=$cost_price, unit_price=$unit_price, pic_filename='$pic_filename' where id=$id ");
        if($sql==1){
            header("location:index.php");
        }else{
            echo '<div class="alert alert-danger">No se editaron los cambios correctamente</div';
        }   
        
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div';
    }
}
