<?php

	include '../conexion.php';

	$con = mysqli_connect($host,$user,$pw,$db);

	// Check connection
	if (mysqli_connect_errno())
  	{
  		echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
		header ("Location: ../index.php");
  	}
	mysqli_set_charset($con,"utf8");

	if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
		
		$usuario = $_POST['usuario'];
		$pass = $_POST['contrasena'];

		$sql = "SELECT * FROM ficha WHERE Usuario='" . $usuario . "' AND Contrasena= '" . $pass . "'";

		if ($result = mysqli_query($con, $sql)) {
			if (mysqli_num_rows($result)>0){
				
				$row = mysqli_fetch_row($result);

				session_set_cookie_params(0);
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: ../exportado_pdf.php?folio=".$row[0]);
			} 
			else header("Location: ../index.php?error=1");
		}
		else header("Location: ../index.php?error=1");
	}
?>