

<!doctype html>
<html>
<?php
  
  $mysqli = new mysqli("localhost","root","","bd_pre_inscripcion"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
  
  if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
  }

  $query = "SELECT id_estado, estado FROM t_estado ORDER BY estado";
  $resultado=$mysqli->query($query);
?>
<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 


<script language="javascript" src="js/verificacion-de-edad.js"></script>
  <link rel="icon" href="imagenes/logo_sep.png">
  <title>Cbtis 19 || Ficha</title>

<?php require_once "scripts.php" ?>
  <script language="javascript">
      $(document).ready(function(){
        $("#cbx_estado").change(function () {

          $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
          
          $("#cbx_estado option:selected").each(function () {
            id_estado = $(this).val();
            $.post("includes/getMunicipio.php", { id_estado: id_estado }, function(data){
              $("#cbx_municipio").html(data);
            });            
          });
        })
      });
      
      $(document).ready(function(){
        $("#cbx_municipio").change(function () {
          $("#cbx_municipio option:selected").each(function () {
            id_municipio = $(this).val();
            $.post("includes/getLocalidad.php", { id_municipio: id_municipio }, function(data){
              $("#cbx_localidad").html(data);
            });            
          });
        })
      });
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Pre-Registro Nuevo Ingreso CBTIS 19</title>
</head>

<body>
	<?php 

require "View/nav.view.php";


?>



<div class="container-fluid" style="margin-top:50px;">


<div class="card">
  <div class="card-header text-dark bg-dark ">
 
   
  <form action="insertar.php" method="post" name="Registro" lang="es" class="form"  >




<div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Usuario" name="usu" aria-label="Usuario" aria-describedby="addon-wrapping">
</div>







<div class="input-group flex-nowrap" style="margin-top: 10px;">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping" ><i class="fas fa-key"></i></span>
  </div>

  <input type="number" class="form-control" placeholder="Contraseña" aria-label="Contraseña" name="pass" aria-describedby="addon-wrapping"  >
</div>



 
 <p class="card-text  text-white">Usuario y contraseña para poder consultar su ficha</p>
  </div>
  <div class="card-body ">
<h2>Datos Personales</h2>
<hr>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text ">Nombre:</span>
    </div>
 
	   <input name="p_nombre" id="p_nombre" class="form-control" onblur="Validar(this)" placeholder="Nombre..." required   type="text"  maxlength="255" pattern="[a-zA-Z]{1,255}">

  </div>

   <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Edad:</span>
    </div>
        <input type="text" class="form-control"  placeholder="Edad..." required name="p_edad" id="p_edad"  maxlength="5">

  </div>



  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Sexo</label>
  </div>
  <select class="custom-select"  name="p_sexo" id="p_sexo" >
    <option selected>Selecciona una opcion..</option>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
   
  </select>
</div>


   <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Nacionalidad:</span>
    </div>
        <input name="p_nacionalidad" id="p_nacionalidad" class="form-control" onblur="Validar(this)" placeholder="Nacionalidad..." required type="text"  maxlength="50" pattern="[a-zA-Z]{0,50}">

  </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">CURP:</span>
    </div>
		        <input name="p_curp" id="p_curp" class="form-control" placeholder="CURP..." onblur="Validar(this)" required type="text"  maxlength="20" pattern="[A-Z0-9]{18}">

  </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Fecha de Nacimiento:</span>
    </div>
				        <input type="date" name="p_fnacimiento" id="p_fnacimiento" id='p_fnacimiento' class="form-control" placeholder="Fecha de Nacimiento..."  step="1" min="1990-01-01" max="2015-12-31" value="1990-01-01">

  </div>

      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Lugar de Nacimiento:</span>
    </div>
						        <input name="p_lnacimiento" id="p_lnacimiento" class="form-control" onblur="Validar(this)" placeholder="Lugar de Nacimiento..." required type="text"  maxlength="50">

  </div>

     <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Estado Civil:</span>
    </div>
	        <input name="p_ecivil" id="p_ecivil"  class="form-control" onblur="Validar(this)" placeholder="Estado Civil..." required type="text"  maxlength="20" pattern="[a-zA-Z]{0,20}">


  </div>

      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Domicilio:</span>
    </div>
			        <input name="p_dom" id="p_dom" class="form-control" onblur="Validar(this)" placeholder="Domicilio..." required type="text"  maxlength="255">


  </div>

     <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Colonia:</span>
    </div>
					        <input name="p_col" id="p_col" class="form-control" type="text" placeholder="Colonia..."  maxlength="255">


  </div>

      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">C.P:</span>
    </div>
        <input name="p_cp" id="p_cp" class="form-control" onblur="Validar(this)" placeholder="C.P..." required type="text"  maxlength="10" pattern="[0-9]{5,10}">


  </div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Selecciona Estado:</label>
  </div>



  <select name="cbx_estado" id="cbx_estado" class="custom-select">
        <option value="0">Seleccionar Estado</option>
        <?php while($row = $resultado->fetch_assoc()) { ?>
          <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
        <?php } ?>
      </select>
</div>


   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Selecciona Municipio:</label>
  </div>
 
  <select name="cbx_municipio" id="cbx_municipio" class="custom-select"></select>
</div>
      
      
      
     <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Selecciona Localidad:</label>
  </div>
  
  <select name="cbx_localidad" id="cbx_localidad" class="custom-select"></select>
</div>
      
   





   

    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Tel. Celular:</span>
    </div>
            <input name="p_tel"   class="form-control" onblur=" Validar(this)" placeholder="Tel. Celular..." required type="text"  maxlength="30" pattern="[0-9]{0,9}">


  </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Tel. Celular:</span>
    </div>
		        <input name="p_celular"   class="form-control" onblur=" Validar(this)" placeholder="Tel. Celular..." required type="text"  maxlength="30" pattern="[0-9]{0,9}">


  </div>



     <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">E-mail:</span>
    </div>
        <input name="p_email"  class="form-control" onblur=" Validar(this)" placeholder="E-mail..." required type="email" size="40" maxlength="40">


  </div>


     <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Actividad Laboral:</span>
    </div>
		        <input name="p_labora"  class="form-control" onblur=" Validar(this)" placeholder="Actividad Laboral..." required type="text" size="50" maxlength="50">


  </div>


  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label  class="input-group-text" >Transporte que utilizas para trasladarte a la escuela:</label>
  </div>
  <select name="p_transporte"  onblur="Validar(this)" required class="custom-select" >
 <option selected>Selecciona una opcion</option>
            <option value="camion">Camión</option>
            <option value="taxi">Taxi</option>
            <option value="carro_particular">Carro Particular</option>
  </select>
</div>


 <label id="label-carrera_1" ></label>

 <div class="input-group mb-3">
 <div class="input-group-prepend">
<label  class="input-group-text">1ª Opción de Carrera:</label>
  </div>
<select id="carrera_1" name="p_carrera1" class="custom-select"  onchange="valid()"   required >
  <option value='0'>Selecciona una opcion</option>
<option value="m_comunicacion">Medios de Comunicación</option>
<option value="electricidad">Electricidad</option>
<option value="ventas">Ventas</option>
<option value="contabilidad">Contabilidad</option>
<option value="l_quimico">Laboratorista Químico (solo T.V.)</option>
<option value="p_alimentos_bebidas">Preparación de Alimentos y Bebidas</option>
<option value="programacion">Programación (solo T.M.)</option>
</select>
  </div>

<div class="input-group mb-3">
 <div class="input-group-prepend">
    <label class="input-group-text" >2ª Opción de Carrera:</label>
  </div>

<select id="carrera_2" name="p_carrera2" class="custom-select"  onchange="valid()"   required >
  <option value='0'>Selecciona una opcion</option>
<option value="m_comunicacion">Medios de Comunicación</option>
<option value="electricidad">Electricidad</option>
<option value="ventas">Ventas</option>
<option value="contabilidad">Contabilidad</option>
<option value="l_quimico">Laboratorista Químico (solo T.V.)</option>
<option value="p_alimentos_bebidas">Preparación de Alimentos y Bebidas</option>
<option value="programacion">Programación (solo T.M.)</option>
</select>
</div>


<div class="input-group mb-3">
 <div class="input-group-prepend">
    <label class="input-group-text" >3ª Opción de Carrera:</label>
  </div>
<select id="carrera_3" name="p_carrera3" class="custom-select"  onchange="valid()"   required>
  <option value='0'>Selecciona una opcion</option>
<option value="m_comunicacion">Medios de Comunicación</option>
<option value="electricidad">Electricidad</option>
<option value="ventas">Ventas</option>
<option value="contabilidad">Contabilidad</option>
<option value="l_quimico">Laboratorista Químico (solo T.V.)</option>
<option value="p_alimentos_bebidas">Preparación de Alimentos y Bebidas</option>
<option value="programacion">Programación (solo T.M.)</option>
</select>
</div>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Turno:</label>
  </div>
  <select  name="p_turno"  onblur="Validar(this)" required   class="custom-select" >
   <option selected>Selecciona una opcion</option>
            <option value="m">Turno Matutino</option>
            <option value="v">Turno Vespertino</option>
  </select>
</div>
<br>
<h2>Datos Personales</h2>
<hr>
Datos Familiares

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><label>Nombre de los padres</label></th>
    
	  <th scope="col"><label>Ocupación</label></th>
                <th scope="col"><label>Lugar de Trabajo</label></th>
                <th scope="col"><label>Teléfono de Trabajo</label></th>


    </tr>
  </thead>
  <tbody>
    <tr>
                <td><input name="f_padre1"  class="form-control" placeholder="Tutor uno..." onblur="Validar(this)" required type="text" size="30" maxlength="255"></td>
                <td><input name="f_ocupacion1"   class="form-control" placeholder="Ocupación..." onblur="Validar(this)" required type="text" size="30" maxlength="255"></td>
                <td><input name="f_ltrabajo1"   class="form-control" placeholder="Lugar de Trabajo..." onblur="ValidarNumero(this)" required type="text" size="30" maxlength="255"></td>
                <td><input name="f_teltrabajo1"  class="form-control" placeholder="Teléfono de Trabajo..." onblur="ValidarNumero(this)" required type="text" size="30" maxlength="255"></td>

    </tr>
    <tr>
                <td><input name="f_padre2"  class="form-control" placeholder="Tutor dos..." onblur="Validar(this)" type="text" size="30" maxlength="255"></td>
                <td><input name="f_ocupacion2"  class="form-control" placeholder="Ocupación..." onblur="Validar(this)"  type="text" size="30" maxlength="255"></td>
                <td><input name="f_ltrabajo2"  class="form-control" placeholder="Lugar de Trabajo..." onblur="ValidarNumero(this)" type="text" size="30" maxlength="255"></td>
                <td><input name="f_teltrabajo2" class="form-control" placeholder="Teléfono de Trabajo..." onblur="ValidarNumero(this)" type="text" size="30" maxlength="255"></td>
    </tr>
 
  </tbody>
</table>

<br>
<h2>Datos Personales</h2>
<hr>


 <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Secundaria:</span>
    </div>

				        <input name="ep_secundaria"  class="form-control" placeholder="Secundaria..." onblur="Validar(this)" required type="text" size="100" maxlength="255">

  </div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Localidad:</span>
    </div>

        <input name="ep_localidad"  class="form-control" placeholder="Localidad..." onblur="Validar(this)" required type="text" size="100" maxlength="255">

  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Municipio:</span>
    </div>

		        <input name="ep_municipio"  class="form-control" placeholder="Municipio..." onblur="Validar(this)" required type="text" size="100" maxlength="255">

  </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Promedio General:</span>
    </div>

			 <input name="ep_promedio"  class="form-control" placeholder="Promedio General..." onblur="ValidarNumero(this)" required type="text" size="20" maxlength="2" pattern="[0-9]{0.3}">

  </div>


      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Año en que egresaste de la secundaria:</span>
    </div>

        <input name="ep_anoegreso"  class="form-control" placeholder="Año..." onblur="Validar(this)" required type="text" size="20" maxlength="20" pattern="[0-9]{0.4}">
  </div>


  <br>
  <input type="submit" name="Enviar" class="btn btn-primary btn-lg btn-block" value="Enviar Registro" onclick="return verificarE ();">
</form>

  </div>
</div>


</div>



<?php 

require "View/footer.view.php";


?>


    
<script type="text/javascript">
  function valid(){
    $("#alert_carrera").remove();
    var carrera_1 = $("#carrera_1").val();
    var carrera_2 = $("#carrera_2").val();
    var carrera_3 = $("#carrera_3").val();
    if(carrera_1 != "" && carrera_2 != ""){
      if (carrera_1 == carrera_2 || carrera_2 == carrera_3 || carrera_1 == carrera_3){
        $("#label-carrera_1").before(`
              <br>
          <div id="alert_carrera" class="bg-warning card">
            <p>Campo duplicado</p>
          </div>
        `);
      }
    }else if(carrera_2 != "" && carrera_3 != ""){
      if(carrera_2 == carrera_3){
        $("#label-carrera_1").before(`
          <br>
          <div id="alert_carrera" class="bg-warning card">
            <p>Campo duplicado</p>
          </div>
        `);
      }
    }else if(carrera_1 != "" && carrera_3 != ""){
      if(carrera_1 == carrera_3){
        $("#label-carrera_1").before(`
              <br>
          <div id="alert_carrera" class="bg-warning card">
            <p>Campo duplicado</p>
          </div>
        `);
      }
    } 
  }
</script>
</body>
</html>