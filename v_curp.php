<?php
//Conectar BD
include("conexion.php");

//CONEXION A BD
$con = new mysqli($host,$user,$pw,$db);

//Comprobacion de curp duplicada

 $buscarCurp = "SELECT * FROM ficha
 WHERE p_curp = '$_POST[curp]' ";

 $result = $con->query($buscarCurp);

 mysqli_close($con);

 $count = mysqli_num_rows($result);

 if ($count > 0) {
	
	 $cadena = 'location: Index.php?curp_existente=true&curp='.$_POST['curp'];
	 header($cadena);
 }
 else{

     header("location: ficha.php");

 }
 
?>