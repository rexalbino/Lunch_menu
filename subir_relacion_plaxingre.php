<?php

    require('conexion.php');
    require('header.php');

    $id_ingrediente=$_POST['id_ingreee'];
    $id_platillo=$_POST['id_recetaa'];
    $id_pesobruto=$_POST['bruto'];
    $id_pesoneto=$_POST['neto'];
    $id_merma=$_POST['merma'];
    $id_costeunitario=$_POST['totalbruto'];
    $id_costeneto=$_POST['totalneto'];
    $id_paxpesos=$_POST['paxpesos'];

    echo "Estoy sosteniendo ".$id_ingrediente." , ".$id_platillo." , ".$id_pesobruto." , ".$id_pesoneto." , ".$id_merma." , ".$id_costeunitario." , ".$id_costeneto." , ".$id_paxpesos;
    
    $sql="INSERT INTO `platillo_ingrediente` (`id_relacion`, `id_ingrediente`, `id_platillo`, `peso_bruto`, `peso_neto`, `merma`, `id_tipo_merma`, `coste_unitario`, `coste_neto`, `pax_pesos`, `pax_porciento`) VALUES (NULL, '$id_ingrediente', '$id_platillo', '$id_pesobruto', '$id_pesoneto', '$id_merma', '1', '$id_costeunitario', '$id_costeneto', '$id_paxpesos', '0');";
    if(mysqli_query($link,$sql)){
        echo "Introducido";
        //header("Location: anadir_ingredientes.php?id=$id_platillo");
        ?>
        
        

    <script type="text/javascript">
            window.location="anadir_ingredientes.php?id=$id_platillo";
        </script>
    <?php
        
    }else{
        echo "Algo salio mal";
        $paso="0";
    }
    

?>