<?php
session_start();

if(isset($_SESSION['usuario'])){
header('Location: cpanel.php');

}else{


}$errores = '';

if ($_SERVER['REQUEST_METHOD']=='POST') {
	
	$usuario = filter_var (strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password= $_POST['password'];
	$password2= $_POST['password2'];

if(empty($usuario) or empty($password) or empty($password2))
{
$errores .='<li>Por favor rellena todo los datos correctamente</li>';
}else{

	try
	{
$conexion =new PDO('mysql:host=localhost;dbname=bd_pre_inscripcion','root','') ;


	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}

$statement =$conexion->prepare('SELECT * FROM usuarios where usuario= :usuario limit 1');
$statement->execute(array(':usuario' => $usuario));
$resultado = $statement ->fetch();
if ($resultado != false) {
	# code...
	$errores .= '<li>El nombre de usuario ya existe</li>';
}
$password = $password;
$password2 =  $password2;



if($password != $password2){

$errores .= '<li>las contraseñas estan erroneas</li>';

}else{

if($errores == ''){

	$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');

	$statement->execute(array(':usuario' => $usuario, ':pass' => $password));
	header('Location: login.php');

}



}    



}

}

require 'View/registrate.view.php';
?>