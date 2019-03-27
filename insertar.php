<!doctype html>
<html>
<body>

<?php
    ini_set ('error_reporting', E_ALL & ~E_NOTICE);
include("conexion.php"); 

/* Variables del HTML*/
$juan=1234;
$id = uniqid($juan);


$usu = $_REQUEST['usu'];

$pass = $_REQUEST['pass'];

$p_nombre = $_REQUEST['p_nombre'];

$p_edad = $_REQUEST['p_edad'];

$p_sexo = $_REQUEST['p_sexo'];

$p_nacionalidad = $_REQUEST['p_nacionalidad'];

$p_curp = $_REQUEST['p_curp'];

$p_fnacimiento = $_REQUEST['p_fnacimiento'];

$p_lnacimiento = $_REQUEST['p_lnacimiento'];

$p_ecivil = $_REQUEST['p_ecivil'];

$p_dom = $_REQUEST['p_dom'];

$p_col = $_REQUEST['p_col'];

$p_cp = $_REQUEST['p_cp'];

$p_estado = $_REQUEST['cbx_estado'];

$p_municipio = $_REQUEST['cbx_municipio'];

$p_localidad = $_REQUEST['cbx_localidad'];

$p_telefono = $_REQUEST['p_tel'];
$p_celular = $_REQUEST['p_celular'];


$p_email = $_REQUEST['p_email'];

$p_labora = $_REQUEST['p_labora'];

$p_transporte = $_REQUEST['p_transporte'];

$p_carrera1 = $_REQUEST['p_carrera1'];

$p_carrera2 = $_REQUEST['p_carrera2'];

$p_carrera3 = $_REQUEST['p_carrera3'];

$p_turno = $_REQUEST['p_turno'];

$f_padre1 = $_REQUEST['f_padre1'];

$f_ocupacion1 = $_REQUEST['f_ocupacion1'];

$f_ltrabajo1 = $_REQUEST['f_ltrabajo1'];

$f_teltrabajo1 = $_REQUEST['f_teltrabajo1'];

$f_padre2 = $_REQUEST['f_padre2'];

$f_ocupacion2 = $_REQUEST['f_ocupacion2'];

$f_ltrabajo2 = $_REQUEST['f_ltrabajo2'];

$f_teltrabajo2 = $_REQUEST['f_teltrabajo2'];

$ep_secundaria = $_REQUEST['ep_secundaria'];

$ep_localidad = $_REQUEST['ep_localidad'];

$ep_municipio = $_REQUEST['ep_municipio'];

$ep_promedio = $_REQUEST['ep_promedio'];

$ep_anoegreso = $_REQUEST['ep_anoegreso'];
/*-------------------*/




if ($usu!="" && $pass!="" && $p_nombre!="" && $p_edad!=""  && $p_sexo!="" && $p_nacionalidad!="" 
	&& $p_curp!="" && $p_fnacimiento!="" && $p_lnacimiento!=""   && $p_ecivil!="" && $p_dom!="" && $p_col!="" 
	&& $p_cp!="" && $p_estado!=""  && $p_municipio!="" && $p_localidad!="" && $p_telefono!="" && $p_celular!=""
	&& $p_email!="" && $p_labora!="" && $p_transporte!="" && $p_carrera1!="" && $p_carrera2!="" && $p_carrera3!=""
	&& $p_turno!="" && $f_padre1!="" && $f_ocupacion1!=""  && $f_ltrabajo1!="" && $f_teltrabajo1!="" 
    && $ep_secundaria!=""  && $ep_localidad!="" && $ep_municipio!="" && $ep_promedio!="" && $ep_anoegreso!="" ) {

/* Conexion BD */
$con = new mysqli($host,$user,$pw,$db);

/* Check connection 
if ($con -> connect_errno)
  {
  echo "Failed to connect to MySQL: ";
  }
 else
  {
  echo "Conectado";
  }    */

/* Insertar */




$sql= mysqli_query($con,"SELECT COUNT(*) AS total FROM ficha WHERE usuario='$usu'");
$row=mysqli_fetch_object($sql);
if($row->total == 0){



$sql = "INSERT INTO ficha (folio, Usuario, contrasena, p_nombre, p_edad, p_sexo, p_nacionalidad, p_curp, p_fnacimiento, p_lnacimiento, p_ecivil, p_dom, p_col, p_cp, p_estado, p_municipio, p_localidad, p_telefono, p_celular, p_email, p_labora, p_transporte, p_carrera1, p_carrera2, p_carrera3, p_turno, f_padre1, f_ocupacion1, f_ltrabajo1, f_teltrabajo1, f_padre2, f_ocupacion2, f_ltrabajo2, f_telefono2, ep_secundaria, ep_localidad, ep_municipio, ep_promedio, ep_anoegreso) values ('','$usu','$pass','$p_nombre','$p_edad','$p_sexo','$p_nacionalidad','$p_curp','$p_fnacimiento','$p_lnacimiento','$p_ecivil','$p_dom','$p_col','$p_cp','$p_estado','$p_municipio','$p_localidad','$p_telefono','$p_celular','$p_email','$p_labora','$p_transporte','$p_carrera1','$p_carrera2','$p_carrera3','$p_turno','$f_padre1','$f_ocupacion1','$f_ltrabajo1','$f_teltrabajo1','$f_padre2','$f_ocupacion2','$f_ltrabajo2','$f_teltrabajo2','$ep_secundaria','$ep_localidad','$ep_municipio','$ep_promedio','$ep_anoegreso')";

mysqli_query($con,$sql) or
die("Problemas en el select".mysqli_error($con));
mysqli_close($con);



}



require 'exportado_pdf.php';



}else{








}




/*___________________*/  

/* Cerrar Conexion */



?>
  
 </body> 
</html>