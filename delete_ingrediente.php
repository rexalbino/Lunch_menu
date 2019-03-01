<?php
    require 'header.php';
    require 'conexion.php';

    $id_ingrediente=$_GET['id'];
    $sql_eliminar="DELETE FROM `ingredientes` WHERE `ingredientes`.`id_ingredientes` = '$id_ingrediente';";

    if(mysqli_query($link,$sql_eliminar)){
        echo "Eliminado";
        ?>

        <script type="text/javascript">
            window.location="ingredientes.php";
        </script>

        <?php
    }else{
        echo "No eliminado";
        echo $id_ingrediente;
        echo "<br/>Se produjo el error: " . mysqli_error($link)."Volveremos a la pantalla de ingredientes en 10 segundos";
        ?>

        <script type="text/javascript">
            setTimeout(function() {
                window.location.href = "ingredientes.php";
                }, 10000);
        </script>
        <div style="display: flex;justify-content: center;align-items: center;">
                <img src="https://media.giphy.com/media/69u846XVoZBl6D4nR7/giphy.gif">
    </div>
        <?php
    }
?>
    
