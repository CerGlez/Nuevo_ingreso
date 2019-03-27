<?php
session_start();

if(isset($_SESSION['usuario'])){
require 'View/panel.view.php';







}else{
  header('Location: login.php');
}




?>