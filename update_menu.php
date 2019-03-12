<?php

    require('conexion.php');
    require('header.php');

    $id=$_GET['id'];

    $nombre=$_POST['nombreingrediente'];
    $entrada=$_POST['entrada'];
    $fuerte=$_POST['fuerte'];
    $guar1=$_POST['guarnicion1'];
    
    
    if (strlen($_POST['notas'])>='1'){
        $nota=$_POST['notas'];
    }else{
        $nota='N/A';
    }
        $guar2=$_POST['guarnicion2'];
    $empaque1=$_POST['empaque1'];
    $empaque2=$_POST['empaque2'];
    

    echo "Estoy sosteniendo ".$nombre." , ".$entrada." , ".$fuerte." , ".$guar1." , ".$guar2." , ".$nota." , ".$id;
    
    $sql="UPDATE `menus` SET `nombre_menu` = '$nombre', `id_entrada` = '$entrada', `id_plato_fuerte` = '$fuerte', `id_guarnicion_1` = '$guar1', `id_guarnicion_2` = '$guar2',`id_empaque1` = $empaque1, `id_empaque2` = $empaque2, `nota` = '$nota' WHERE `menus`.`id_menu` = '$id';";
    if(mysqli_query($link,$sql)){
        echo "Actualizado";
        //header("Location: anadir_ingredientes.php?id=$id_platillo");
        
        ?>
    <script type="text/javascript">
            window.location="menus.php";
        </script>
    <?php
        
    }else{
        echo "Algo salio mal<br/>";
        echo "<br/>Se produjo el error: " . mysqli_error($link)."Volveremos a la pantalla de platillos en 10 segundos";
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                window.location.href = "menus.php";
                }, 10000);
        </script><?php
    }
    

?>