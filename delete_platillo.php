<?php
    require 'header.php';
    require 'conexion.php';

    $id_platillo=$_GET['id'];
    $sql_eliminar="DELETE FROM `platillo` WHERE `platillo`.`id_platillo` = '$id_platillo' ;";

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
    
