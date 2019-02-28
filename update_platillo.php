<?php 
    require('header.php');
    require('conexion.php');

    $nombreplatillo = $_POST['nombreingrediente'];
    $porciones= $_POST['porciones'];
    $tiempo = $_POST['tiempopreparacion'];
    $instrucciones = $_POST['instructivo'];
    $id = $_POST['id'];

    $sql="UPDATE `platillo` SET `nombre_platillo` = '$nombreplatillo', `porciones` = '$porciones', `tiempo_preparacion` = '$tiempo', `instr` = '$instrucciones' WHERE `platillo`.`id_platillo` = '$id';";

    if(mysqli_query($link,$sql)){
        echo "Introducido";
        ?>

        <script type="text/javascript">
            window.location="index.php";
        </script>

        <?php
    }else{
        echo "No actualizado";
    }
?>