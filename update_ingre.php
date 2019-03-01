<?php
    require('header.php');
    require('conexion.php');

    $ningrediente = $_POST['nombre_ingrediente'];
    $cingrediente = $_POST['codigo'];
    $caningrediente = $_POST['cantidad'];
    $uingrediente = $_POST['unidad'];
    $pingrediente = $_POST['ppresentacion'];
    $puingrediente = $_POST['punitario'];
    $id = $_POST['id'];
    
    
    $sql="UPDATE `ingredientes` SET `codigo` = '$cingrediente', `cantidad` = '$caningrediente', `id_unidad` = '$uingrediente', `nombre_ingrediente` = '$ningrediente', `costo_presentacion` = '$pingrediente', `costo_unitario` = '$puingrediente' WHERE `ingredientes`.`id_ingredientes` = '$id';";

    if(mysqli_query($link,$sql)){
        echo "Introducido";
        ?>

        <script type="text/javascript">
            window.location="ingredientes.php";
        </script>

        <?php
    }else{
        echo "No actualizado";
    }
?>