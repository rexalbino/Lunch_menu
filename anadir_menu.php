<?php

    require('conexion.php');
    require('header.php');
    $sql='SELECT `id_platillo`,`nombre_platillo` FROM `platillo` ';
    $obtener_platillos1 = mysqli_query($link,$sql);
    $obtener_platillos2 = mysqli_query($link,$sql);
    $obtener_platillos3 = mysqli_query($link,$sql);
    $obtener_platillos4 = mysqli_query($link,$sql);

?>
<div class="container">
<div class="row">
    <div class="col s12">
        <h3>Selecciona los platillos para el menu</h3>
    </div>
    </div>
<form id="fmenu" action="add_menu.php" method="post">
<div class="row">
    <div class="input-field col m6 s12 center-align">
      <input id="nombreingrediente" name="nombreingrediente" type="text" class="validate" required>
      <label class="active" for="first_name2">Nombre del men&uacute;</label>
    </div>
</div>
    <br/>
<div class="row">
    <div class="col m6 s12">
        <label>Selecciona platillo de entrada</label>
            <select class="browser-default" id="entrada" name="entrada" required>
                <option value="" disabled selected>Elije un platillo</option>
                <?php
		          while($row = mysqli_fetch_array($obtener_platillos1)):
                ?>
                <option value="<?php echo $row['id_platillo']; ?>"><?php echo $row['nombre_platillo']; ?></option>
                <?php
                  endwhile;
                ?>
            </select>
    </div>
    <div class="col m6 s12">
        <label>Selecciona platillo fuerte</label>
            <select class="browser-default" id="fuerte" name="fuerte" required>
                <option value="" disabled selected>Elije un platillo</option>
                <?php
		          while($row2 = mysqli_fetch_array($obtener_platillos2)):
                ?>
                <option value="<?php echo $row2['id_platillo']; ?>"><?php echo $row2['nombre_platillo']; ?></option>
                <?php
                  endwhile;
                ?>
            </select>
    </div>
    <div class="col m6 s12">
        <label>Selecciona guarnicion 1</label>
            <select class="browser-default" id="guarnicion1" name="guarnicion1" re>
                <option value="" disabled selected>Elije un platillo</option>
                <?php
		          while($row3 = mysqli_fetch_array($obtener_platillos3)):
                ?>
                <option value="<?php echo $row3['id_platillo']; ?>"><?php echo $row3['nombre_platillo']; ?></option>
                <?php
                  endwhile;
                ?>
            </select>
    </div>
    <div class="col m6 s12">
        <label>Selecciona guarnicion 2</label>
            <select class="browser-default" id="guarnicion2" name="guarnicion2" required>
                <option value="" disabled selected>Elije un platillo</option>
                <?php
		          while($row4 = mysqli_fetch_array($obtener_platillos4)):
                ?>
                <option value="<?php echo $row4['id_platillo']; ?>"><?php echo $row4['nombre_platillo']; ?></option>
                <?php
                  endwhile;
                ?>
                <option value="0">Ninguno</option>
            </select>
    </div>
    <div class="input-field col s12">
          <textarea id="notas" name="notas" class="materialize-textarea" data-length="250"></textarea>
          <label for="textarea1">Notas</label>
</div>
</form>
    <br/>
    <br/>
    <br/>
    <div class="container center-align">
    <div class="row">
    <div class="col s6">
    
        <button class="btn-large waves-effect waves-light" type="submit" name="action" form="fmenu" value="choose">Subir men&uacute;
            <i class="material-icons right">send</i>
        </button>    
    </div>
    <div class="col s6">
        <a href="menus.php" class="waves-effect waves-light btn-large red accent-4"><i class="material-icons right">close</i>Cancelar</a>
    </div>
        </div>
    </div>
</div>