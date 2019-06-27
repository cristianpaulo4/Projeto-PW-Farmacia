<?php 
session_start(); 

$_SESSION['cidade']  = $_GET['cidade'];	
unset($_SESSION['bairro']);

header("Location:../viw/pgCliente.php");	

	

?>