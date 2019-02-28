<?php
    require 'header.php';
    require 'conexion.php';

    $id_platillo=$_GET['id_plat'];
    $SQL="SELECT `nombre_platillo` FROM `platillo` WHERE `id_platillo`='$id_platillo' ";
    $get_platillo = mysqli_query($link,$SQL);
    $platillo = mysqli_fetch_assoc($get_platillo);

?>

<br/>
<br/>
<div class="container center-align">
    <h2> Esta seguro de querer eliminar el platillo</h2> <h2 class="red-text"><b><?php echo $platillo['nombre_platillo'];  ?></b></h2>
<h3>Al eliminar el platillo no volvera a verse ni a ser usado</h3>
    
    <div class="row container center-align">
        <div class="col s6">
                <div class="col s6">
                <a href="delete_platillo.php?id=<?php echo $id_platillo ?>" class="waves-effect waves-light btn-large red accent-4"><i class="material-icons right">delete</i>Eliminar</a>
            </div>
            </div>
            <div class="col s6">
                <a href="index.php" class="waves-effect waves-light btn-large "><i class="material-icons right">close</i>Cancelar</a>
            </div>   
    </div>
</div>
<br/>
