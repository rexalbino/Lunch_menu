<?php
    $dondeestoy='2';
    require('conexion.php');
    require('header.php');
    $sql="SELECT id_menu,`id_entrada`,`id_plato_fuerte`,`id_guarnicion_1`,`id_guarnicion_2`,`nombre_menu`,entrada.nombre_platillo as entrada,fuerte.nombre_platillo as fuerte,guar1.nombre_platillo as guar1,guar2.nombre_platillo as guar2 FROM `menus` INNER JOIN platillo AS entrada ON entrada.id_platillo = id_entrada INNER JOIN platillo AS fuerte ON fuerte.id_platillo = menus.id_plato_fuerte INNER JOIN platillo AS guar1 ON guar1.id_platillo=menus.id_guarnicion_1 INNER JOIN platillo AS guar2 ON guar2.id_platillo=menus.id_guarnicion_2 ";
    $resultado_menu = mysqli_query($link,$sql) or die(mysqli_error($link));

    
    //$get_costo_entrada = mysqli_query($link,$sql_entrada);
    //$costo_entrada = mysqli_fetch_assoc($get_costo_entrada);

    
    //$get_costo_fuerte = mysqli_query($link,$sql_fuerte);
    //$costo_fuerte = mysqli_fetch_assoc($get_costo_fuerte);

    
    //$get_costo_guarnicion1 = mysqli_query($link,$sql_guarnicion1);
    //$costo_guarnicion1 = mysqli_fetch_assoc($get_costo_guarnicion1);

    
    //$get_costo_guarnicion2 = mysqli_query($link,$sql_guarnicion2);
    //$costo_guarnicion2 = mysqli_fetch_assoc($get_costo_guarnicion2);
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
        <table class="responsive-table">
        <thead>
          <tr>
              <th>Nombre menu</th>
              <th>Entrada</th>
              <th>Plato fuerte</th>
              <th>Guarnicion 1</th>
              <th>Guarnicion 2</th>
              <th>Coste neto</th>
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
            <td><?php 
                
                $entrada=$row2['id_entrada']; 
                $fuerte = $row2['id_plato_fuerte'];
                $guar1 = $row2['id_guarnicion_1'];
                $guar2 = $row2['id_guarnicion_2'];
                
                $sql_entrada="SELECT SUM(`coste_neto`) as sumaneto,SUM(`pax_pesos`)AS sumapax FROM platillo_ingrediente WHERE `id_platillo`='$entrada'; ";
                $sql_fuerte="SELECT SUM(`coste_neto`) as sumaneto,SUM(`pax_pesos`)AS sumapax FROM platillo_ingrediente WHERE `id_platillo`='$fuerte'; ";
                $sql_guarnicion1="SELECT SUM(`coste_neto`) as sumaneto,SUM(`pax_pesos`)AS sumapax FROM platillo_ingrediente WHERE `id_platillo`='$guar1'; ";
                $sql_guarnicion2="SELECT SUM(`coste_neto`) as sumaneto,SUM(`pax_pesos`)AS sumapax FROM platillo_ingrediente WHERE `id_platillo`='$guar2'; ";
                
                
                
                $get_costo_entrada = mysqli_query($link,$sql_entrada);
                $costo_entrada = mysqli_fetch_assoc($get_costo_entrada);
                $get_costo_fuerte = mysqli_query($link,$sql_fuerte);
                $costo_fuerte = mysqli_fetch_assoc($get_costo_fuerte);
                $get_costo_guarnicion1 = mysqli_query($link,$sql_guarnicion1);
                $costo_guarnicion1 = mysqli_fetch_assoc($get_costo_guarnicion1);
                $get_costo_guarnicion2 = mysqli_query($link,$sql_guarnicion2);
                $costo_guarnicion2 = mysqli_fetch_assoc($get_costo_guarnicion2);
                
                echo $costo_entrada['sumaneto']+$costo_fuerte['sumaneto']+$costo_guarnicion1['sumaneto']+$costo_guarnicion2['sumaneto'];
                
                
                ?></td>
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