<?php 
	

	
	
	class clienteDAO
	{
		
		
		public function cadastrarCliente($conn, $dados)
		{
			
			$result = $conn->exec("INSERT INTO cliente (nome, telefone, cpf, estado, cidade, bairro, rua, numero, login, senha) values (
				'{$dados['nome']}', 
				'{$dados['telefone']}',
				'{$dados['cpf']}',
				'{$dados['estado']}',
				'{$dados['cidade']}',
				'{$dados['bairro']}',
				'{$dados['rua']}',
				'{$dados['numero']}',
				'{$dados['login']}',
				'{$dados['senha']}')");	

		}


		// listar clientes
		public function listarCliente($conn)
		{
		$result = $conn->query("SELECT * FROM cliente");			
		return $result;			
		}

		// excluir cliente
		public function excluirCliente($conn, $id)
		{
		$result = $conn->query("DELETE FROM cliente WHERE idcliente ='{$id}'");	
		if ($result) {
				header("Location:../viw/listarCliente.php");
			}	
			
		}

		// buscar cliente
		public function buscarCliente($conn, $nome)
		{
		$result = $conn->query("SELECT * FROM cliente WHERE nome LIKE '%{$nome}%'");
		if ($result) {
			return $result;	
						
		}else{
			return $conn;
		}				
					
		}

		// buscar cliente po codigo
		public function buscarClienteCodigo($conn, $id)
		{
		$result = $conn->query("SELECT * FROM cliente WHERE idcliente ='{$id}'");
		$row = $result->fetch();		
		return $row;					
		}

		// alterar cliente
		public function alterarCliente($conn, $cliente, $id)
		{
		$result = $conn -> query("UPDATE cliente SET		
		nome = '{$cliente['nome']}',
		telefone = '{$cliente['telefone']}',				
		cpf ='{$cliente['cpf']}',
		estado ='{$cliente['estado']}', 
		cidade ='{$cliente['cidade']}',
		bairro ='{$cliente['bairro']}',
		rua ='{$cliente['rua']}',
		numero ='{$cliente['numero']}',
		login ='{$cliente['login']}',
		senha ='{$cliente['senha']}'
		WHERE idcliente = '{$id}'");
		if ($result) {
			echo "Atualizado com sucesso!";	
					

		}else{
			echo "Erro ao atualizar!";
		}	
		}

	}


 ?>