<?php

    require('conexion.php');
    require('header.php');
    $id=$_GET['id'];

    $sql="SELECT id_menu,nota,`id_entrada`,`id_plato_fuerte`,`id_guarnicion_1`,`id_guarnicion_2`,`nombre_menu`,entrada.nombre_platillo as entrada,fuerte.nombre_platillo as fuerte,guar1.nombre_platillo as guar1,guar2.nombre_platillo as guar2 FROM `menus` INNER JOIN platillo AS entrada ON entrada.id_platillo = id_entrada INNER JOIN platillo AS fuerte ON fuerte.id_platillo = menus.id_plato_fuerte INNER JOIN platillo AS guar1 ON guar1.id_platillo=menus.id_guarnicion_1 INNER JOIN platillo AS guar2 ON guar2.id_platillo=menus.id_guarnicion_2 WHERE id_menu='$id' ";
    $get_dato_menu = mysqli_query($link,$sql);
    $menu = mysqli_fetch_assoc($get_dato_menu);


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
<form id="fmenu" action="update_menu.php?id=<?php echo $id ?>" method="post">
<div class="row">
    <div class="input-field col m6 s12 center-align">
      <input id="nombreingrediente" name="nombreingrediente" value="<?php echo $menu['nombre_menu']; ?>" type="text" class="validate" required>
      <label class="active" for="first_name2">Nombre del men&uacute;</label>
    </div>
</div>
    <br/>
<div class="row">
    <div class="col m6 s12">
        <label>Selecciona platillo de entrada</label>
            <select class="browser-default" id="entrada" name="entrada" required>
                <option value="<?php echo $menu['id_entrada']; ?>" selected><?php echo $menu['entrada']; ?></option>
                <option value="" disabled >Elije un platillo</option>
                
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
                <option value="<?php echo $menu['id_plato_fuerte']; ?>" selected><?php echo $menu['fuerte']; ?> </option>
                <option value="" disabled >Elije un platillo</option>
                
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
            <select class="browser-default" id="guarnicion1" name="guarnicion1" required>
                <option value="<?php echo $menu['id_guarnicion_1']; ?>" selected><?php echo $menu['guar1']; ?></option>
                <option value="" disabled >Elije un platillo</option>
                
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
                <option value="<?php echo $menu['id_guarnicion_2']; ?>" selected><?php echo $menu['guar2']; ?></option>
                <option value="" disabled >Elije un platillo</option>
                
                <?php
		          while($row4 = mysqli_fetch_array($obtener_platillos4)):
                ?>
                <option value="<?php echo $row4['id_platillo']; ?>"><?php echo $row4['nombre_platillo']; ?></option>
                <?php
                  endwhile;
                ?>
                <!--<option value="0">Ninguno</option>-->
            </select>
    </div>
    <div class="input-field col s12">
          <textarea id="notas" name="notas" class="materialize-textarea" data-length="250"><?php echo $menu['nota']; ?></textarea>
          <label for="textarea1">Notas</label>
</div>
</form>
    <br/>
    <br/>
    <br/>
    <div class="container center-align">
    <div class="row">
    <div class="col s6">
    
        <button class="btn-large waves-effect waves-light" type="submit" name="action" form="fmenu" value="choose">Actualizar
            <i class="material-icons right">send</i>
        </button>    
    </div>
    <div class="col s6">
        <a href="menus.php" class="waves-effect waves-light btn-large red accent-4"><i class="material-icons right">close</i>Cancelar</a>
    </div>
        </div>
    </div>
</div>