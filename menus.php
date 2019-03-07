<?php
    $dondeestoy='2';
    require('conexion.php');
    require('header.php');
    $sql="SELECT id_menu,`nombre_menu`,entrada.nombre_platillo as entrada,fuerte.nombre_platillo as fuerte,guar1.nombre_platillo as guar1,guar2.nombre_platillo as guar2 FROM `menus` INNER JOIN platillo AS entrada ON entrada.id_platillo = id_entrada INNER JOIN platillo AS fuerte ON fuerte.id_platillo = menus.id_plato_fuerte INNER JOIN platillo AS guar1 ON guar1.id_platillo=menus.id_guarnicion_1 INNER JOIN platillo AS guar2 ON guar2.id_platillo=menus.id_guarnicion_2 ";
    $resultado_menu = mysqli_query($link,$sql) or die(mysqli_error($link));
?>
<div class="container">
    <div class="row">
        <div  class="col s12">
        </br>
        <h2>Men&uacute;s</h2>
        </br>
        </br>
       <div class="center"><a href="anadir_menu.php" class="center waves-effect waves-light btn">A&ntilde;adir nuevo men&uacute;</a></div>
        </br>
        </br>
        </br>
        <table>
        <thead>
          <tr>
              <th>Nombre menu</th>
              <th>Entrada</th>
              <th>Plato fuerte</th>
              <th>Guarnicion 1</th>
              <th>Guarnicion 2</th>
              <th>Datos financieros</th>
              <th>Editar</th>
              <th>Borrar</th>
          </tr>
        </thead>

        <tbody>
            <?php
			while($row2 = mysqli_fetch_array($resultado_menu)):
			?>
          <tr>
            <td><?php echo $row2['nombre_menu']; ?></td>
            <td><?php echo $row2['entrada']; ?></td>
            <td><?php echo $row2['fuerte']; ?></td>
            <td><?php echo $row2['guar1']; ?></td>
            <td><?php echo $row2['guar2']; ?></td>
            <td><a href="menus_dat.php?id=<?php echo $row2['id_menu']; ?>"><i class="material-icons">attach_money</i></a></td>
            <td><a href="editar_menu.php?id=<?php echo $row2['id_menu']; ?>"><i class="material-icons">edit</i></a></td>
            <td><a href="menu_eliminar.php?id=<?php echo $row2['id_menu']; ?>"><i class="material-icons">delete</i></a></td>
          </tr>
            <?php
				endwhile;
            ?>
        </tbody>
      </table> 
        </div>
    </div>
</div>