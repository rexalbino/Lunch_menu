<?php
    require('header.php');
    require('conexion.php');

    $nombre=$_POST['nombreproveedor'];
    $id=$_GET['id'];
    
    
    $sql="UPDATE `proveedor` SET `des_proveedor` = '$nombre' WHERE `proveedor`.`id_proveedor` = '$id';";

    if(mysqli_query($link,$sql)){
        echo "Actualizado";
        ?>

        <script type="text/javascript">
            window.location="empaques.php";
        </script>

        <?php
    }else{
        echo "<br/>Se produjo el error: " . mysqli_error($link)."Volveremos a la pantalla de empaques en 10 segundos";
        ?>

        <script type="text/javascript">
            setTimeout(function() {
                window.location.href = "empaques.php";
                }, 15000);
        </script>
        <div style="display: flex;justify-content: center;align-items: center;">
                <img src="https://media.giphy.com/media/69u846XVoZBl6D4nR7/giphy.gif">
    </div>
        <?php
    
    }
?>