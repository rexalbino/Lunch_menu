<!DOCTYPE html>
<script src="js/jquery-3.3.1.js"></script>
       <script>
 
            $('#btnDel').click(function() {
                var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
                $('#input' + num).remove();     // remove the last element
 
                // enable the "add" button
                $('#btnAdd').attr('disabled','');
 
                // if only one element remains, disable the "remove" button
                if (num-1 == 1)
                    $('#btnDel').attr('disabled','disabled');
            });
 
            $('#btnDel').attr('disabled','disabled');
        });
        $(document).on('change', '#servicio', function(event) {
        $('#servicioSelecionado').val($("#servicio option:selected").val());
        });
        
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field">borrar</a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
        });
        $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
            });
        });
</script>
    <?php 
        require('header.php'); 
        require('conexion.php');
        
        $sql_ingredientes="SELECT `codigo`,`cantidad`,`nombre_ingrediente`,`costo_presentacion`,`costo_unitario`,ingredientes.id_ingredientes,unidad.des_unidad FROM `ingredientes` INNER JOIN unidad ON ingredientes.id_unidad = unidad.id_unidad ORDER BY ingredientes.id_ingredientes ";
        $resultado = mysqli_query($link,$sql_ingredientes) or die(mysqli_error($link));

        $id_platillo="";

    ?>
    </head>

    <body>
       
        
    <div class="container">
    <h2>Ingresar nuevo platillo</h2>
        
    <form id="platillos">
    <div class="row">
    <div class="input-field col m6 s12">
      <input id="nombre_ingrediente" type="text" class="validate">
      <label class="active" for="first_name2">Nombre del platillo</label>
    </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
      <input id="nombre_ingrediente" type="text" class="validate">
      <label class="active" for="first_name2">Porciones</label>
    </div>
    <div class="input-field col s5">
      <input id="nombre_ingrediente" type="text" class="validate">
      <label class="active" for="first_name2">Tiempo de preparacion</label>
    </div>
    <div class="input-field col s1">
      <p>Minutos</p>
    </div>
    </div>
        <hr color="#f44336" size=3>
    <div id="input1" name="ingredientes[]">
    <div class="row">
    <div class="input-field col m6 s12">
        <select class="browser-default" id="ingrediente" name="ingrediente">
      <option value="" disabled selected>Elije uno</option>
        <?php
	       while($row = mysqli_fetch_array($resultado)):
	   ?>
            
      <option value="<?php echo $row['id_ingredientes']; ?>"><?php echo $row['nombre_ingrediente']; ?></option>
            
        <?php
				endwhile;
            ?>    
            
    </select>
    </div>
    <div class="col m6 s12">
      <input id="ingre" name="nom_Servicio" >
    </div>
    </div>
    <div class="row">
    <div class="input-field col m3 s6">
      <input id="bruto" type="number" class="validate" step="any">
      <label class="active" for="first_name2">Peso bruto</label>
    </div>
    <div class="col m1 s6">
        <p>Kg</p>
    </div>
    <div class="input-field col m4 s12">
      <input id="merma" type="number" class="validate" step="any">
      <label class="active" for="first_name2">Merma</label>
    </div>
    <div class="input-field col m3 s12">
      <input id="neto" type="number" class="validate" step="any">
      <label class="active" for="first_name2">Peso neto</label>
    </div>
    <div class="col m1 s6">
        <p>Kg</p>
    </div>
    </div>
    <div class="row">
    <div class="input-field col m3 s6">
        <input id="totalbruto" type="number" class="validate" step="any">
        <label class="active" for="first_name2">Coste unitario bruto</label>
    </div>
    <div class="input-field col m3 s6">
        <input id="totalneto" type="number" class="validate" step="any">
        <label class="active" for="first_name2">Coste total neto</label>
    </div>
    <div class="input-field col m3 s6">
        <input id="paxpesos" type="number" class="validate" step="any">
        <label class="active" for="first_name2">Precio por pax pesos</label>
    </div>
    <div class="input-field col m3 s6">
        <input id="paxporcentaje" type="number" class="validate" step="any">
        <label class="active" for="first_name2">Peso por pax en porcentaje</label>
    </div>
    </div>
        <hr color="#f44336 " size=3>
    </div>
    <div>
        <a href="javascript:void(0);" class="add_button" title="Add field">Añadir</a>
    </div>
    </form> 
    
    <div class="center">
        
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
        </button>
        
    </div>
        </div>
        
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
  </html>