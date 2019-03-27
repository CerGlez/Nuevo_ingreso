<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CBTIS 19 || Inscripcion </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="imagenes/logo_sep.png">

<?php require_once "scripts.php" ?>
  
</head>
<body>
  
  
  <?php 

require "View/nav.view.php";


?>



  <div class="container-fluid" >
    <div class="row" style=" height: 610px;    text-align: center;  ">
      <div class="col"  style="background-color:#878484;     " >
        <h1 style=" margin-top:175px;  color:#0E5EA8;">Crear tu ficha</h1> 
<a href="ficha.php">
<button type="button" class="btn btn-primary btn-lg btn-block"  style=" margin-bottom:75px; margin-top:50px; ">Crear ficha</button></a>


      </div>
      <div class="col"  style="background-color:#ccc">
        
                  <h1 style=" margin-top:150px;  color:#0E5EA8;">Ver mi ficha</h1> 


<form action="php/login.php" method="post">  

<div class="form-group">
        <input style=" margin-top:25px; " type="text" class="form-control" name="usuario" placeholder="Usuario" required> 
        <input style=" margin-top:25px; " type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
    </div>
        <br>
        <br>
        <center>
        <input style="margin-top:-20px;"  type="submit" class="btn btn-primary btn-lg" name="Enviar" value="Enviar Registro">
        <br>
                  <?php
                    
                    if(isset($_GET['error']) && $_GET['error']==1){
       
                      echo '<h3 style="vertical-align: text-bottom; text-align: center; font-weight: normal;"><font color="#FF0000">No se encontró al usuario</font></h3>';
       
                      }else if(isset($_GET['error']) && $_GET['error']==2){
                      
                      echo '<h3 style="vertical-align: text-bottom; text-align: center; font-weight: normal;"><font color="#FF0000">Para acceder a esa pagina tienes que iniciar sesion</font></h3>';
                      
                    }
                    
                  ?>
                    
                    
                                  </center>
                    </form>
          
          
          
          
      </div>
    
    </div>
  </div> 


  <?php 

require "View/footer.view.php";


?>

  
</body>
    
</html>
