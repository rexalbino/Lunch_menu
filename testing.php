<?php
    require('header.php'); //llamar header
    require('conexion.php');//llamar concexio a bd
    $sql_ingredientes="SELECT `codigo`,`cantidad`,`nombre_ingrediente`,`costo_presentacion`,`costo_unitario`,ingredientes.id_ingredientes,unidad.des_unidad FROM `ingredientes` INNER JOIN unidad ON ingredientes.id_unidad = unidad.id_unidad ORDER BY ingredientes.id_ingredientes ";//SQL de datos para ingredientes
        $resultado = mysqli_query($link,$sql_ingredientes) or die(mysqli_error($link)); //SQL listo
?>
<script>
b = 0;
function anadir(){
        a++;
 
        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = '<div class="container"><div class="row"><div class="input-field col m6 s12"><select class="browser-default" id="ingrediente'+b+'" name="ingrediente'+b+'"><option value="" disabled selected>Elije uno</option>'+<?php while($row = mysqli_fetch_array($resultado)):?>+'<option value="'+<?php echo $row['id_ingredientes']; ?>+'">'+<?php echo $row['nombre_ingrediente']; ?>+'</option>'+<?php endwhile;?>+'</div><div class="input-field col m6 s12"><input id="cingrediente'+b+'" name="cingrediente'+b+'" type="number" class="validate"><label class="active" for="first_name2">Codigo ingrediente</label></div></div><div class="row"><div class="input-field col m3 s6"><input id="bruto'+b+'" name="bruto'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Peso bruto</label></div><div class="col m1 s6"><p>Kg</p></div><div class="input-field col m4 s12"><input id="merma'+b+'" name="merma'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Merma</label></div><div class="input-field col m3 s12"><input id="neto'+b+'" name="'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Peso neto</label></div><div class="col m1 s6"><p>Kg</p></div><div class="row"><div class="input-field col m3 s6"><input id="totalbruto'+b+'" name="totalbruto'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Coste unitario bruto</label></div><div class="input-field col m3 s6"><input id="totalneto'+b+'" name="totalneto'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Coste total neto</label></div><div class="input-field col m3 s6"><input id="paxpesos'+b+'" name="paxpesos'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Precio por pax pesos</label></div><div class="input-field col m3 s6"><input id="paxporcentaje'+b+'" name="'+b+'" type="number" class="validate" step="any"><label class="active" for="first_name2">Peso por pax en porcentaje</label></div></div></div>';
            document.getElementById('ingredientes').appendChild(div);document.getElementById('ingredientes').appendChild(div);
}
</script>



 
 
</head>
 
<body>  
    <div >
       <h3>comida</h3> 
        <form id=ingredientes method="post">
            <div class="row">
                <input type="button" class="btn btn-success" id="add_cancion()" onClick="anadir()" value="Añadir ingrediente" />
                <div class="container" id="ingredientes"></div>
            </div>
        </form>
    
    </div>
    
    
     <script>
a = 0;
function addCancion(){
        a++;
 
        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = '<div style="clear:both" class="cancion_'+a+' col-md-offset-1 col-md-6"><input class="form-control" name="cancion_'+a+'" type="text"/></div><div class="cancion_'+a+' col-md-2""><input class="form-control" name="duracion_'+a+'" type="text"/></div>';
            document.getElementById('canciones').appendChild(div);document.getElementById('canciones').appendChild(div);
}
</script>
   
 
</body>
</html>
