<?php 
session_start(); 

$_SESSION['estado']  = $_GET['estado'];	
unset($_SESSION['cidade']);
unset($_SESSION['bairro']);

header("Location:../viw/pgCliente.php");	

	

?>