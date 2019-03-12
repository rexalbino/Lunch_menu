<?php

    require('conexion.php');
    require('header.php');

    $id_ingrediente=$_POST['id_ingreee'];
    $id_platillo=$_POST['id_recetaa'];
    $id_pesobruto=$_POST['bruto'];
    $id_pesoneto=$_POST['neto'];
    $id_merma=$_POST['merma'];
    $id_relacion_merma=$_POST['id_merma'];
    $id_costeunitario=$_POST['totalbruto'];
    $id_costeneto=$_POST['totalneto'];
    $id_paxpesos=$_POST['paxpesos'];
    $id_costoingrediente=$_POST['costingre'];

    echo "Estoy sosteniendo ".$id_ingrediente." , ".$id_platillo." , ".$id_pesobruto." , ".$id_pesoneto." , ".$id_merma." , ".$id_costeunitario." , ".$id_costeneto." , ".$id_paxpesos." , ".$id_costoingrediente;
    
    $sql="INSERT INTO `platillo_ingrediente` (`id_relacion`, `id_ingrediente`, `id_platillo`, `peso_bruto`, `peso_neto`, `merma`, `id_tipo_merma`, `coste_unitario`, `coste_neto`, `pax_pesos`, `pax_porciento`,`coste_ingrediente`) VALUES (NULL, '$id_ingrediente', '$id_platillo', '$id_pesobruto', '$id_pesoneto', '$id_merma', '$id_relacion_merma', '$id_costeunitario', '$id_costeneto', '$id_paxpesos', '0','$id_costoingrediente');";
    if(mysqli_query($link,$sql)){
        echo "Introducido";
        //header("Location: anadir_ingredientes.php?id=$id_platillo");
        $sql_neto="SELECT `costo_neto` FROM `platillo` WHERE `id_platillo`='$id_platillo' ";
        $obtener_neto = mysqli_query($link,$sql_neto);
        $neton =mysqli_fetch_assoc($obtener_neto);
        
        $valor_neto= $neton['costo_neto'];
        
        $neto= (FLOAT)$valor_neto + (FLOAT)$id_costeneto;
        
        echo $valor_neto. " + ".$id_costeneto." = ".$neto;
        $sql_actualizar_costo_neto="UPDATE `platillo` SET `costo_neto` = '$neto' WHERE `platillo`.`id_platillo` = '$id_platillo';";
        mysqli_query($link,$sql_actualizar_costo_neto);
        ?>
    <script type="text/javascript">
            window.location="anadir_ingredientes.php?id=<?php echo $id_platillo?>";
        </script>
    <?php
        
    }else{
        echo "Algo salio mal";
        $paso="0";
    }
    

?>