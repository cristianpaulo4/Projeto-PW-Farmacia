<?php 	


	session_start(); 
	
	require_once '../Main/conexao.php';
	require_once '../Model/produtoDAO.php';


	$produto = $_POST;
	
	if(isset($_FILES['arquivo'])){
		$extenssao = substr($_FILES['arquivo']['name'],-4);
		$novo_nome = md5(time()).$extenssao;
		$diretorio = '../imagens/';
		$idfarmacia = $_SESSION['id'];

		move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);

		$result = $conn->exec("INSERT INTO produto (nome, descricao, preco, qtd, farmacia_idfarmacia, imagem) 
	VALUES ('{$produto['nome']}', '{$produto['descricao']}', '{$produto['valor']}', '{$produto['qtd']}', '{$idfarmacia}', '{$novo_nome}')");

		if($result){
			echo "enviado com sucesso";
		}	

	}


	//$p->salvarProduto($conn, $produto);






 ?>