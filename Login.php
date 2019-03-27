<?php
session_start();
if(isset($_SESSION['usuario'])){
header('Location: cpanel.php');

}
$errores = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
$password = $_POST['password'];
$password =  $password;
try{
$conexion = new PDO('mysql:host=localhost;dbname=bd_pre_inscripcion','root','');

}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}
$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario= :usuario 
	AND pass = :password');
$statement->execute(array(
':usuario' => $usuario,
':password' => $password
));

$resultado = $statement->fetch();
if ( $resultado !== false) {
	# code...
	$_SESSION['usuario'] = $usuario;
	header('Location: cpanel.php');
}else{
	$errores .='<li>datos erroneos</li>';
}
}



require 'View/login.view.php';
?>