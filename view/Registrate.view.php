<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registrate view Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css" />
    <script src="main.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php require_once "scripts.php" ?>

</head>
<body>
 <div class="container-fluid">
    <div class="row">
      <div class="col-lg"  style="background-color:#fff;  margin-top: 100px;">
       


<div class="card">
  <div class="card-header">

<h1 class="card-title text-center" style="float: center;" >Registro </h1>

                    

 </div>
 <div class="card-body">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
  

 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario: </label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="usuario" id="inputEmail3" placeholder="Usuario">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña: </label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Contraseña">

    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña: </label>
    <div class="col-sm-10">
      <input type="password" name="password2" class="form-control" id="inputPassword3" placeholder="Repetir password">

    </div>
  </div>



  <button type="submit" style="margin-bottom: 25px; margin-top: 25px;" class="btn btn-outline-success btn-lg">Registrar</button>



<?php if(empty(!$errores)): ?>
<div class="error"> 

<ul>
  <?php echo $errores; ?>
</ul>

</div>
<?php endif; ?>

</form>
<p class="texto-registrate"> 
¿Ya tienes cuenta?
<a href="login.php">Iniciar sesion</a>

</p>
</div>
 </div>
</div>



      </div>
     
  
    </div>  
  </div> 

</body>
</html>