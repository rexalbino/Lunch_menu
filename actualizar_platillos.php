<!DOCTYPE html>
<script src="js/jquery-3.3.1.js"></script>
       
    
    <?php 
        require('header.php'); 
        require('conexion.php');
        
        $id_plato=$_GET['id'];

        $sql_datos="SELECT `nombre_platillo`,`porciones`,`tiempo_preparacion`,`instr` FROM `platillo` WHERE `id_platillo`='$id_plato' ";
        $get_dato_platillo = mysqli_query($link,$sql_datos);
        $platillo = mysqli_fetch_assoc($get_dato_platillo);

    ?>
    </head>

    <body>
       
        
    <div class="container">
    <h2>Actualizar platillos</h2>
        
    <form id="platillos" method="post" action="update_platillo.php">
    <div class="row">
    <div class="input-field col m6 s12">
      <input id="nombreingrediente" name="nombreingrediente" type="text" class="validate" value="<?php echo $platillo['nombre_platillo']; ?>" required>
      <label class="active" for="first_name2">Nombre del platillo</label>
    </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
      <input id="porciones" name="porciones" type="number" class="validate" value="<?php echo $platillo['porciones']; ?>" required>
      <label class="active" for="first_name2">Porciones</label>
    </div>
    <div class="input-field col s5">
      <input id="tiempopreparacion" name="tiempopreparacion" type="number" class="validate" value="<?php echo $platillo['tiempo_preparacion']; ?>" required>
      <label class="active" for="first_name2">Tiempo de preparacion</label>
    </div>
    <div class="input-field col s1">
      <p>Minutos</p>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <textarea id="instructivo" name="instructivo" class="materialize-textarea" required><?php echo $platillo['instr']; ?></textarea>
          <label for="textarea1">Instrucciones para preparar</label>
        </div>
      </div>
    </div>
        <div class="row" style="visibility: hidden;">
        <div class="col m4 s12" >
            <input type="number" value="<?php echo $id_plato ?>" id="id" name="id" readonly>
        </div>
        </div>
    
    </form> 
    
    <div class="container center-align">
        <div class="row">
            <div class="col s6">
                <button class="btn-large waves-effect waves-light" type="submit" name="action" form="platillos">Editar platillo
                    <i class="material-icons right">send</i>
                </button>
            </div>
            <div class="col s6">
                <a href="index.php#ingredientes" class="waves-effect waves-light btn-large red accent-4"><i class="material-icons right">close</i>Cancelar</a>
            </div>
        </div>
        
        
        
    </div>
        </div>
        
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
  </html>