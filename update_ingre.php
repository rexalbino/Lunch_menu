<?php
    require('header.php');
    require('conexion.php');

    $nombre=$_POST['nombreproveedor'];
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