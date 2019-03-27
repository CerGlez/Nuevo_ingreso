





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cbtis 19 || Panel</title>
    <link rel="icon" href="imagenes/logo_sep.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script type="text/javascript" src="js/validaciones.js"></script>
<?php require_once "scripts.php" ?>

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

    
    <?php 

require "View/nav_adm.view.php";


?>

<div class="container-fluid" style="margin-top:30px; margin-bottom: 20px;">
  <div class="row">
  
  
   <div class="container">
<div class="jumbotron bg-dark text-white">
   <h1>Exportar </h1>      
    <p>Exportar la tabla a excel</p>


<form action="exportar_tabla.php" method="POST">



<div class="input-group mb-3">

  <div class="input-group-prepend">
      <span class="input-group-text "><i class="fas fa-file-excel"></i> Titulo:</span>
    </div>

  <input type="text" class="form-control"  name="titulo" required placeholder="titulo excel..." >
  <div class="input-group-append">
    <button type="submit" class="btn btn-outline-success"   name="btnexcel" id="btnexcel"  onFocus="vaciar(this)" 
         onBlur="verificarEntrada(this)"><i class=" fas fa-file-export"></i> Descargar</button>
  </div>
</div>

</form>
  



  </div>
   
</div>
      <br>
     
<div class="container ">
<div class="card text-left">
  <div class="card-header">
   Tabla de datos de nuevo ingreso

  </div>
  <div class="card-body">


<hr>


<div id="tablaDatatable" >
  
<?php
require 'View/tabla.view.php';
?>

</div>
  </div>
  <div class="card-footer text-muted">
cbtis 19  </div>
</div>

</div>

<script>
$(document).ready(function(){
  $("#busqueda").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#cuerpo tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  </div>
</div>
    <?php 

require "View/footer.view.php";


?>
<script type="text/javascript">
  
$(document).ready(function(){

$('#tablaDatatable').load('tabla.view.php');

});


</script>

</body>
</html>
