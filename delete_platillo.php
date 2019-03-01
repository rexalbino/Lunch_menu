<?php
    require 'header.php';
    require 'conexion.php';

    $id_platillo=$_GET['id'];
    $sql_eliminar="DELETE FROM `platillo` WHERE `platillo`.`id_platillo` = '$id_platillo' ;";

    if(mysqli_query($link,$sql_eliminar)){
        echo "Eliminado";
        ?>

        <script type="text/javascript">
            window.location="index.php";
        </script>

        <?php
    }else{
        echo "No eliminado";
        echo $id_platillo;
         echo "<br/>Se produjo el error: " . mysqli_error($link)."Volveremos a la pantalla de platillos en 10 segundos";
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                window.location.href = "index.php";
                }, 10000);
        </script>
    <div style="aling-items: center;  justify-content: center">

    </div>
<?php
    }
?>
    
