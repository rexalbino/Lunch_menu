 <!DOCTYPE html>
<script src="js/jquery-3.3.1.js"></script>
  <?php 
    require('header.php'); 
    require('conexion.php');
    
    $sql_ingredientes='SELECT `codigo`,`cantidad`,`nombre_ingrediente`,`costo_presentacion`,`costo_unitario`,unidad.des_unidad FROM `ingredientes` INNER JOIN unidad ON ingredientes.id_unidad = unidad.id_unidad ORDER BY ingredientes.id_ingredientes DESC ';
    $resultado = mysqli_query($link,$sql_ingredientes) or die(mysqli_error($link));
    
    ?>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
        </script>
    <div class="container">
  <!--<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>-->
        
        <!--platillos-->
    <div id="platillos" class="col s12">
        </br>
        </br>
        </br>
       <div class="center"><a href="nuevo_platillo.php" class="center waves-effect waves-light btn">A&ntilde;adir nuevo platillo</a></div>
        </br>
        </br>
        </br>
        <table>
        <thead>
          <tr>
              <th>Nombre de Platillo</th>
              <th>Numero de ingredientes</th>
              <th>Ficha tecnica</th>
              <th>Editar</th>
              <th>Borrar</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Test 1</td>
            <td>5</td>
            <td><a href="#"><i class="material-icons">developer_board</i></a></td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
          <tr>
            <td>Test 2</td>
            <td>5</td>
            <td><a href="#"><i class="material-icons">developer_board</i></a></td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
          <tr>
            <td>Test 3</td>
            <td>5</td>
            <td><a href="#"><i class="material-icons">developer_board</i></a></td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
        </tbody>
      </table> 
        
    </div>
        
        <!--Ingredientes-->
  <div id="ingredientes" class="col s12">
      
      </br>
        </br>
        <h2>Ingredientes</h2>
        </br>
       <div class="center"><a href="nuevo_ingrediente.php"  class="center waves-effect waves-light btn">A&ntilde;adir nuevo ingrediente</a></div>
        </br>
        </br>
        </br>
      <table>
        <thead>
          <tr>
              <th>Nombre ingrediente</th>
              <th>Clave</th>
              <th>Cantidad</th>
              <th>Unidad</th>
              <th>Precio unitario</th>
              <th>Precio total</th>
              <th>Editar</th>
              <th>Borrar</th>
          </tr>
        </thead>
          <?php
			while($row = mysqli_fetch_array($resultado)):
			?>
        <tbody>
          <tr>
            
            <td><?php echo $row['nombre_ingrediente']; ?></td>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['des_unidad']; ?></td>
            <td><?php echo $row['costo_unitario']; ?></td>
            <td><?php echo $row['costo_presentacion']; ?></td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
        </tbody>
           <?php
				endwhile;
            ?>
      </table>
    </div>
 
        
          

      <!--JavaScript at end of body for optimized loading-->
    </div>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
  </html>