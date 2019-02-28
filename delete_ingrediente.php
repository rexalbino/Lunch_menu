<?php
    require 'header.php';
    require 'conexion.php';

    $id_ingrediente=$_GET['id'];
    $sql_eliminar="DELETE FROM `ingredientes` WHERE `ingredientes`.`id_ingredientes` = '$id_ingrediente';";

    if(mysqli_query($link,$sql_eliminar)){
        echo "Eliminado";
        ?>

        <!--<script type="text/javascript">
            window.location="index.php";
        </script>-->

        <?php
    }else{
        echo "No eliminado";
        echo $id_platillo;
        echo "<br/>Error deleting record: " . mysqli_error($link);
    }
?>
    
