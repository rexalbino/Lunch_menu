<?php
    $dondeestoy='2';
    require('conexion.php');
    require('header.php');

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
              <th>Total neto</th>
              <th>Pax total</th>
              <th>Editar</th>
              <th>Borrar</th>
          </tr>
        </thead>

        <tbody>
            <?php
			//while($row2 = mysqli_fetch_array($resultado_platillo)):
			?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <?php
				//endwhile;
            ?>
        </tbody>
      </table> 
        </div>
    </div>
</div>