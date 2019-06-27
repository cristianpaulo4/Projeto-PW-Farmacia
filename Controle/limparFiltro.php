<?php 		
	session_start();
	unset($_SESSION['estado']);
	unset($_SESSION['cidade']);
	unset($_SESSION['bairro']);
	

	header("Location:../viw/pgCliente.php");
	

 ?>