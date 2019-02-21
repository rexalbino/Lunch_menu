<?php
    require('header.php');
    require('conexion.php');
    

    $nombreplatillo = $_POST['nombreingrediente'];
    $porciones= $_POST['porciones'];
    $tiempo = $_POST['tiempopreparacion'];
    $instrucciones = $_POST['instructivo'];

    echo "Estoy sosteniendo ".$nombreplatillo."</br> , ",$porciones."</br> , ".$tiempo."</br> , ".$instrucciones;

    
?>
<!--
<div class="row">
<div class="input-field col m6 s12">
    <select class="browser-default" id="ingrediente'+b+'" name="ingrediente'+b+'">
        <option value="" disabled selected>Elije uno</option>
        <option value="1">test 1</option>
        <option value="2">test 2</option>
        <option value="3">test 3</option>
    </select>
</div>
<div class="col m6 s12">
    <input id="ingre" name="nom_Servicio" >
    <div class="col m6 s12">
        <input id="codigo'+b+'" name="codigo'+b+'" >
    </div>
</div>
<div class="row">
    <div class="input-field col m3 s6">
        <input id="bruto'+b+'" name="bruto'+b+'" type="number" class="validate" step="any">
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
    </div>-->