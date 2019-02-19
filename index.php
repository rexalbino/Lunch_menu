 <!DOCTYPE html>
  <?php require('header.php'); ?>
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
       <div class="center"><a href="nuevo_platillo.html" class="center waves-effect waves-light btn">Añadir nuevo platillo</a></div>
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
        </br>
       <div class="center"><a href="nuevo_ingrediente.php"  class="center waves-effect waves-light btn">Añadir nuevo ingrediente</a></div>
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

        <tbody>
          <tr>
            <td>test 1</td>
            <td>veg001</td>
            <td>10</td>
            <td>KG</td>
            <td>1</td>
            <td>10</td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
          <tr>
            <td>test 2</td>
            <td>veg002</td>
            <td>10</td>
            <td>L</td>
            <td>1</td>
            <td>10</td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
          <tr>
            <td>test 3</td>
            <td>veg003</td>
            <td>10</td>
            <td>Gr</td>
            <td>1</td>
            <td>10</td>
            <td><a href="#"><i class="material-icons">edit</i></a></td>
            <td><a href="#"><i class="material-icons">delete</i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
 
        
          

      <!--JavaScript at end of body for optimized loading-->
    </div>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
  </html>