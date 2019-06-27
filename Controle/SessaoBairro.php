<?php 
session_start(); 

$_SESSION['bairro']  = $_GET['bairro'];	

header("Location:../viw/pgCliente.php");	

	

?>