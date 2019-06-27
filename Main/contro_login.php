<?php

	$res = $_POST;
	
	require_once '../Main/conexao.php';
	
		
	$cliente = $conn -> query("SELECT idcliente, nome FROM cliente WHERE login='{$res['nome']}' AND senha='{$res['senha']}'");
	$farmacia = $conn -> query("SELECT * FROM farmacia where login = '{$res['nome']}' and senha='{$res['senha']}'");
	
	$row = $cliente->fetch();
	$row2 = $farmacia->fetch();

	if($row){		
		session_start();
		$_SESSION['id'] = $row['idcliente'];
		$_SESSION['nome']= $row['nome'];
		

		header("Location:../viw/pgCliente.php");	
		
	
	}else if($row2){		
		session_start();
		$_SESSION['id'] = $row2['idfarmacia'];
		$_SESSION['nome']= $row2['nome'];		
		header("Location:../viw/pgFarmacia.php");
	}else{	

		echo "<script>
			op = confirm('Usuário não existe!');
			if(op){			
			window.location.replace('../index.php');
			}else{
			window.location.replace('../index.php');
			}
			</script>";

         
   
	}

	
	

	


	










?>