<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--get jquery-->
      <script src="js/jquery-3.3.1.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> Lunch menu creator </title>
    </head>
<?php 
 require('conexion.php');
    
    /*if(isset($_POST['nombre_ingrediente'])){
        $ningrediente = $_POST['nombre_ingrediente'];
        echo $ningrediente;
    }
    if(isset($_POST['codigo'])){
        $cingrediente = $_POST['codigo'];
        echo $ningrediente;
    }
    if(isset($_POST['cantidad'])){
        $caningrediente = $_POST['cantidad'];
        echo $ningrediente;
    }
    if(isset($_POST['unidad'])){
        $uingrediente = $_POST['unidad'];
        echo $ningrediente;
    }
    if(isset($_POST['ppresentacion'])){
        $pingrediente = $_POST['ppresentacion'];
        echo $ningrediente;
    }
    if(isset($_POST['punitario'])){
        $puingrediente = $_POST['punitario'];
        echo $ningrediente;
    }*/
    
    $ningrediente = $_POST['nombre_ingrediente'];
    $cingrediente = $_POST['codigo'];
    $caningrediente = $_POST['cantidad'];
    $uingrediente = $_POST['unidad'];
    $pingrediente = $_POST['ppresentacion'];
    $puingrediente = $_POST['punitario'];
    
    /*echo "Sotengo ". $ningrediente." , ".$cingrediente." , ".$caningrediente." , ".$uingrediente." , ".$pingrediente." , ".$puingrediente;
    
    echo"</br>Unidad ".$uingrediente;*/
    $sql="INSERT INTO `ingredientes` (`id_ingredientes`, `codigo`, `cantidad`, `id_unidad`, `nombre_ingrediente`, `costo_presentacion`, `costo_unitario`) VALUES (NULL, '$cingrediente', '$caningrediente', '$uingrediente', '$ningrediente', '$pingrediente', '$puingrediente');";
    if(mysqli_query($link,$sql)){
        echo "Introducido";
    }else{
        echo "Aqlgo salio mal";
    }
    
    
    
    

    
?>