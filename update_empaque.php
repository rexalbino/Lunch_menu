<?php

    require('conexion.php');
    require('header.php');
    $id = $_GET['id'];
    $nombre=$_POST['nombreempque'];
    $codigo=$_POST['codigo'];
    $capacidad=$_POST['capacidad'];
    $unidad=$_POST['unidad'];
    $cantidad=$_POST['cantidad'];
    $presentacion=$_POST['ppresentacion'];
    $preciounitario=$_POST['punitario'];
    $proveedor=$_POST['proveedor'];
    
    
    if (strlen($_POST['notas'])>='1'){
        $nota=$_POST['notas'];
    }else{
        $nota='N/A';
    }
    

    echo "Estoy sosteniendo ".$nombre." , ".$codigo." , ".$capacidad." , ".$unidad." , ".$cantidad." , ".$preciounitario;
    
    $sql="UPDATE `enpaque` SET `codigo` = '$codigo', `nombre` = '$nombre', `capacidad` = '$capacidad', `id_unidad` = '$unidad', `precio_presentacion` = '$presentacion', `cantidad_presentacion` = '$cantidad', `precio_unitario` = '$preciounitario', `id_proveedor` = '$proveedor', `descripcion` = '$nota' WHERE `enpaque`.`id_empaque` = '$id';";
    if(mysqli_query($link,$sql)){
        echo "Actualizado";
        //header("Location: anadir_ingredientes.php?id=$id_platillo");
        
        ?>
    <script type="text/javascript">
            window.location="empaques.php";
        </script>
    <?php
        
    }else{
        echo "Algo salio mal<br/>";
        echo "<br/>Se produjo el error: " . mysqli_error($link)."Volveremos a la pantalla de empaques en 10 segundos";
        ?>
        <script type="text/javascript">
            setTimeout(function() {
                window.location.href = "empaques.php";
                }, 10000);
        </script><?php
    }
    

?>