


<?php


include("conexion.php"); 

$mensaje="";


if (isset($_POST['btnAccion'])) {
	# code...
	switch ($_POST['btnAccion']) {
		case 'EliminarArt':
			# code...
if (is_numeric($_POST['id'])) {
	# code...
	$ID=$_POST['id'];
$con = new mysqli($host,$user,$pw,$db);
 mysqli_query($con,"delete from ficha where folio='$_POST[id]'");



}
else{

		$mensaje.="no Ok id correcto";

}
			break;
		
		default:
			# code...
			break;
	}
}


?>