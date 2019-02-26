<?php
    require('conexion.php');
    require('header.php');

    $id= $_GET['id'];

    echo $id;
    $sql_platillo="SELECT `nombre_platillo`,`tiempo_preparacion`,`id_platillo`,`porciones`,`instr` FROM `platillo` WHERE `id_platillo` ='$id' ";
    $get_dato_platillo = mysqli_query($link,$sql_platillo);
    $platillo = mysqli_fetch_assoc($get_dato_platillo);

    $sql_ingredientes="SELECT unidad.des_unidad, ingredientes.codigo, ingredientes.cantidad, ingredientes.nombre_ingrediente,`id_relacion`,`peso_bruto` FROM `platillo_ingrediente` INNER JOIN ingredientes ON ingredientes.id_ingredientes = id_ingrediente INNER JOIN unidad ON unidad.id_unidad = ingredientes.id_unidad WHERE id_platillo = '$id' ";
    $resultado = mysqli_query($link,$sql_ingredientes) or die(mysqli_error($link));
?>
<div class="container">
<table class="centered">
        <thead>
          <tr>
              <th><?php echo $platillo['nombre_platillo']; ?></th> <!--Con php meter el nombre de la receta segun el id-->
          </tr>
        </thead>
</table>
<table>
        <thead>
          <tr>
              <th>Raciones:  </th>
              <th><?php echo $platillo['porciones']; ?></th> <!-- Atraccion segun el id de la tabla platillo -->
              <th>Tiempo de preparacion</th>
              <th><?php echo $platillo['tiempo_preparacion']." Minutos "; ?></th> <!-- Atraccion segun el id de la tabla platillo -->
              <th>No. Revicion</th>
              <th>000</th>
          </tr>
        </thead>
</table>
    <hr/>

    <div class="row">
        <div class="col m8">
        <table>       
        <thead>
          <tr>
              <th>Clave</th>
              <th>Cantidad</th>
              <th>Unidad</th>
              <th>Ingrediente</th>
          </tr>
        </thead>
        <tbody>
            <?php
			while($row = mysqli_fetch_array($resultado)):
			?>
          <tr><!-- dentro de un while para traer todo -->
            <td><?php echo $row['codigo']; ?></td><!--Toda esta ifnromacion es atraida segun el id de platillo en relacion con el ingrediente -->
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['des_unidad']; ?></td>
            <td><?php echo $row['nombre_ingrediente']; ?></td>
          </tr>
            <?php 
            endwhile;
            ?>
        </tbody>
      </table>
       
        </div>
        <div class="col m4">
            
       <img src="https://picsum.photos/200">
        </div>
        
    </div>
    <hr/>
    <table>       
        <thead>
          <tr>
              <th class="centered">Metodo de preparacion </th>
          </tr>
        </thead>
        <tbody>
          <tr><!-- dentro de un while para traer todo -->
            <td><?php echo $platillo['instr']; ?></td><!--Toda esta ifnromacion es atraida segun el id de platillo en relacion con el ingrediente -->

          </tr>
        </tbody>
      </table>
    
    
</div>