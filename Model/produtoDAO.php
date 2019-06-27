<?php 

class produtoDAO
{
			
	// cadastrar produto
	public function cadProduto($conn, $produto)
	{
		if(isset($_FILES['arquivo'])){
		$extenssao = substr($_FILES['arquivo']['name'],-4);
		$novo_nome = md5(time()).$extenssao;
		$diretorio = '../imagens/';
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);

		$result = $conn->exec("INSERT INTO produto (nome, descricao, preco, qtd, farmacia_idfarmacia, imagem) 
		VALUES ('{$produto['nome']}', '{$produto['descricao']}', '{$produto['valor']}', '{$produto['qtd']}', '{$produto['idfarmacia']}', '{$novo_nome}')");

		if($result){
			echo "enviado com sucesso <br> <a href='../viw/cadProduto.php'>Voltar</a>";

		}
	}
	}

	// listar produtos
	public function listaProduto($conn)
	{
		$result = $conn->query("SELECT * FROM produto");			
		return $result;			
	}

	// buscar produto por codigo
	public function buscarProduto($conn, $cod)
	{
		$result = $conn->query("SELECT * FROM produto WHERE idproduto='{$cod}'");	
		$row = $result->fetch();		
		return $row;			
	}

	// buscar produto 	nome	
	public function buscarProdutoNome($conn, $nome)
	{
		$result = $conn->query("SELECT * FROM produto WHERE nome LIKE  '%{$nome}%'");				
		return $result;			
	}

	// buscar produto 	nome	
	public function buscarProdutoFarmacia($conn, $id)
	{
		$result = $conn->query("SELECT * FROM produto where farmacia_idfarmacia = '{$id}' and qtd>0");			
		return $result;			
	}

	// excluir produto
	public function excluirProduto($conn, $id)
	{
	$result = $conn->query("DELETE FROM produto WHERE idproduto ='{$id}'");	
	if ($result) {
		header("Location:../viw/listarProduto.php");
	}	
	}

	// alterar produto
	public function alterarProduto($conn, $dados, $id)
	{
		$result = $conn -> query("UPDATE produto SET
		nome = '{$dados['nome']}',
		descricao= '{$dados['descricao']}',
		preco= '{$dados['valor']}',
		qtd= '{$dados['qtd']}'
		
		WHERE idproduto = '{$id}'");
		if ($result) {
			echo "Atualizado com sucesso!";			
			header("Location:../viw/listarProduto.php");		

		}else{
			echo "Erro ao atualizar!";
		}	
	}

	// alterar produto
	public function darBaixaNoProduto($conn, $qtd, $id)
	{

		$result = $conn -> query("UPDATE produto SET
		qtd = '$qtd'		
		WHERE idproduto = '{$id}'");

		if ($result) {
			echo "Obrigado!";			
			
		}else{
			echo "Erro ao atualizar!";
		}
	}









}


 ?>