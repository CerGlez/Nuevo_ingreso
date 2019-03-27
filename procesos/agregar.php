<?php


require_once "../clases/conexion.php";

require_once "../clases/crud.php";
$obj = new crud();
$datos=array(
$_POST['tema'],
$_POST['origen'],
$_POST['img_doc']
);


echo $obj->agregar($datos);


?>