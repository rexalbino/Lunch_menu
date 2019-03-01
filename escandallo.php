<?php 
    
    require('header.php');
    require('conexion.php');

    $id=$_GET['id'];
    //echo $id;
    
    $sql_datosplatillo="SELECT `id_platillo`,`nombre_platillo`,`porciones`,`tiempo_preparacion` FROM `platillo` WHERE `id_platillo`='$id' ";
    $get_dato_platillo = mysqli_query($link,$sql_datosplatillo);
    $platillo = mysqli_fetch_assoc($get_dato_platillo);

    $sql_dato_ingre="SELECT `id_ingrediente`,platillo.id_platillo,`peso_bruto`,`peso_neto`,`merma`,`coste_unitario`,`coste_neto`,`pax_pesos`,ingredientes.codigo,ingredientes.nombre_ingrediente,unidad.des_unidad,platillo.costo_neto,`id_relacion` FROM `platillo_ingrediente` INNER JOIN ingredientes ON platillo_ingrediente.id_ingrediente = ingredientes.id_ingredientes INNER JOIN platillo ON platillo_ingrediente.id_platillo = platillo.id_platillo INNER JOIN unidad ON unidad.id_unidad = ingredientes.id_unidad WHERE platillo_ingrediente.id_platillo  = '$id' ";
    $get_dato_ingre = mysqli_query($link,$sql_dato_ingre);

?>
<div class="container">
      <table>
        <thead>
          <tr>
              <th>Platillo  </th>
              <th><?php echo $platillo['nombre_platillo']; ?></th> <!-- Atraccion segun el id de la tabla platillo -->
              <th>Porciones:  </th>
              <th><?php echo $platillo['porciones']; ?></th> <!-- Atraccion segun el id de la tabla platillo -->
              <th>Tiempo de preparacion</th>
              <th><?php echo $platillo['tiempo_preparacion']." Minutos "; ?></th> <!-- Atraccion segun el id de la tabla platillo -->
              <th>No. Revisi&oacute;n</th>
              <th>001</th>
          </tr>
        </thead>
</table>
<hr/>
      <table>
        <thead>
          <tr>
              <th>Clave</th>
              <th>Ingrediente</th>
              <th>Unidad</th>
              <th>Cantidad bruta</th>
              <th>Merma</th>
              <th>Cantidad Neta</th>
              <th>Coste bruto</th>
              <th>Coste neto</th>
              <th>pax ($)</th>
              <th>pax (%)</th>
              <th>Editar</th>
              <th>Eliminar</th>
              
          </tr>
        </thead>

        <tbody>
            <?php
			while($row2 = mysqli_fetch_array($get_dato_ingre)):
			?>
          <tr>
            <td><?php echo $row2['codigo']; ?></td>
            <td><?php echo $row2['nombre_ingrediente']; ?></td>
            <td><?php echo $row2['des_unidad']; ?></td>
            <td><?php echo $row2['peso_bruto']; ?></td>
            <td><?php echo $row2['merma']; ?></td>
            <td><?php echo $row2['peso_neto']; ?></td>
            <td><?php echo $row2['coste_unitario']; ?></td>
            <td><?php echo $row2['coste_neto']; ?></td>
            <td><?php echo $row2['pax_pesos']; ?></td>
            <td><?php echo ((FLOAT)$row2['coste_neto'] / (FLOAT)$row2['costo_neto'])*100; ?></td>
            <td><a href="escandallo_editar.php?id_platillo=<?php echo $row2['id_platillo']; ?>&id_rel=<?php echo $row2['id_relacion']; ?>&id_ingre=<?php echo $row2['id_ingrediente']; ?>"><i class="material-icons">edit</i></a></td>
            <td><a href="<?php echo $row2['id_relacion']; ?>"><i class="material-icons">delete</i></a></td>
            <?php
				endwhile;
            ?>
          </tr>
        </tbody>
      </table>
    <br/>
    <div class="row center-align">
        <div class="col s12">
        <a href="index.php" class="waves-effect waves-light btn-large black center-align"><i class="material-icons right">keyboard_return</i>Volver a inicio</a>
        </div>
    </div>
    
</div>