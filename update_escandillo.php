<?php

    require('conexion.php');
    require('header.php');

    $id_relacion=$_POST['relacion'];
    $id_platillo=$_POST['id_recetaa'];
    $id_pesobruto=$_POST['bruto'];
    $id_pesoneto=$_POST['neto'];
    $id_merma=$_POST['merma'];
    $id_costeunitario=$_POST['totalbruto'];
    $id_costeneto=$_POST['totalneto'];
    $id_paxpesos=$_POST['paxpesos'];
    $anterior_neto=$_POST['anteriorneto'];
    $id_relacion_merma=$_POST['id_merma'];

    echo "Estoy sosteniendo ".$id_ingrediente." , ".$id_platillo." , ".$id_pesobruto." , ".$id_pesoneto." , ".$id_merma." , ".$id_costeunitario." , ".$id_costeneto." , ".$id_paxpesos." , ".$id_relacion;
    
    $sql="UPDATE `platillo_ingrediente` SET `peso_bruto` = '$id_pesobruto', `peso_neto` = '$id_pesoneto', `merma` = '$id_merma', `coste_unitario` = '$id_costeunitario', `coste_neto` = '$id_costeneto', `pax_pesos` = '$id_paxpesos',`id_tipo_merma` = '$id_relacion_merma' WHERE `platillo_ingrediente`.`id_relacion` = '$id_relacion';";
    if(mysqli_query($link,$sql)){
        echo "Introducido";
        //header("Location: anadir_ingredientes.php?id=$id_platillo");
        $sql_neto="SELECT `costo_neto` FROM `platillo` WHERE `id_platillo`='$id_platillo' ";
        $obtener_neto = mysqli_query($link,$sql_neto);
        $neton =mysqli_fetch_assoc($obtener_neto);
        
        $valor_neto= $neton['costo_neto'];
        
        if($valor_neto<='0'){
            (FLOAT)$neto=(FLOAT)$valor_neto + (FLOAT)$id_costeneto;
        }else{
        (FLOAT)$neto_quitar= (FLOAT)$valor_neto - (FLOAT)$anterior_neto;
        
        (FLOAT)$neto=(FLOAT)$neto_quitar + (FLOAT)$id_costeneto;
        
        echo "<br/>".$valor_neto. " - ".$anterior_neto." = ".$neto_quitar;
        echo "<br/>".$neto_quitar. " + ".$id_costeneto." = ".$neto;
        $sql_actualizar_costo_neto="UPDATE `platillo` SET `costo_neto` = '$neto' WHERE `platillo`.`id_platillo` = '$id_platillo';";
        mysqli_query($link,$sql_actualizar_costo_neto);
        }
        
        
        ?>
    <script type="text/javascript">
            window.location="escandallo.php?id=<?php echo $id_platillo; ?>";
        </script>
    <?php
        
    }else{
        echo "Algo salio mal";
        $paso="0";
        echo "<br/>Se produjo el error: " . mysqli_error($link)."Volveremos a la pantalla de ingredientes en 10 segundos";
    }
    

?>