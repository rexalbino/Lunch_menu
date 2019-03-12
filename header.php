<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--get jquery-->
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> Lunch menu creator </title>
    </head>

    <body>
        
         
        <nav class="nav-extended #000000 black">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center"><img src="img/lunchlogo.png"></a>
      <!--<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>-->
    </div>
    <!--<div class="nav-content">
    
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="index.php">Platillos</a></li>
        <li class="tab"><a href="ingredientes.php">Ingredientes</a></li>
      </ul>
    
    </div>-->
            
     <div class="row black">
    <div class="col s12">
      <ul class="tabs black">
        <li class="tab col s3 white-text"><a href="index.php" target="_self">Platillos</a></li>
        <li class="tab col s3" <?php if(isset($dondeestoy)){if($dondeestoy='1'){  ?> class="active"<?php }} ?>><a href="ingredientes.php" target="_self"> Ingredientes</a></li>
        <li class="tab col s3" <?php if(isset($dondeestoy)){if($dondeestoy='2'){  ?> class="active"<?php }} ?>><a href="menus.php" target="_self" >Menus</a></li>
        <li class="tab col s3" <?php if(isset($dondeestoy)){if($dondeestoy='3'){  ?> class="active"<?php }} ?>><a href="empaques.php" target="_self" >Empaques</a></li>
      </ul>
    </div>
  </div>
  </nav>
        <script>
  
        
        </script>