<?php

class farmaciaDAO
{


	public function cadFarmacia($conn, $dados)
	{
	$res = $conn->query("INSERT INTO farmacia (
	telefone, email, estado, cidade, bairro, rua, numero, cnpj, login, senha, nome
	) VALUES (
	'{$dados['telefone']}',
	'{$dados['email']}',
	'{$dados['estado']}',
	'{$dados['cidade']}',
	'{$dados['bairro']}',
	'{$dados['rua']}',
	'{$dados['numero']}',
	'{$dados['cnpj']}',
	'{$dados['login']}',
	'{$dados['senha']}',
	'{$dados['nome']}'
	)");
	if($res){		
		echo "enviado com sucesso <br> <a href='../viw/cadFarmacia.php'>Voltar</a>";
	}
	}


	// listar farmacia
	public function listaFarmacia($conn)
	{
		$result = $conn->query("SELECT * FROM farmacia");			
		return $result;			
	}

	// listar farmacia por cidade 
	public function cidadeFarmacia($conn, $estado)
	{
		$result = $conn->query("SELECT * FROM farmacia WHERE estado='{$estado}'");				
		return $result;			
	}


	// listar farmacia por cidade 
	public function bairroFarmacia($conn, $cidade)
	{
		$result = $conn->query("SELECT * FROM farmacia WHERE  cidade='{$cidade}'");			
		return $result;	
	}



	// listar farmacia por cidade  e estado
	public function FiltroCidadeFarmacia($conn,$estado, $cidade)
	{
		$result = $conn->query("SELECT * FROM farmacia WHERE estado ='{$estado}' and cidade='{$cidade}'");			
		return $result;	
	}


	// listar farmacia por bairro 
	public function FiltroBairroFarmacia($conn,$cidade,$bairro)
	{
		$result = $conn->query("SELECT * FROM farmacia WHERE cidade='{$cidade}' and bairro ='{$bairro}'");				
		return $result;			
	}


	// buscar farmacia po codigo
		public function buscarFarmaciaCodigo($conn, $id)
		{
		$result = $conn->query("SELECT * FROM farmacia WHERE idfarmacia ='{$id}'");
		$row = $result->fetch();		
		return $row;					
		}

	// alterar dados farmacia
		public function alterarFarmacia($conn, $farmacia, $id)
		{
		$result = $conn -> query("UPDATE farmacia SET
			telefone ='{$farmacia['telefone']}',
			email='{$farmacia['email']}',
			estado='{$farmacia['estado']}', 
			cidade='{$farmacia['cidade']}',
			bairro='{$farmacia['bairro']}',
			rua='{$farmacia['rua']}',
			numero='{$farmacia['numero']}',
			cnpj='{$farmacia['cnpj']}',
			login='{$farmacia['login']}',
			senha='{$farmacia['senha']}',
			nome ='{$farmacia['nome']}'

			WHERE idfarmacia = '{$id}'");

		if ($result) {
			echo "Atualizado com sucesso!";
			$_SESSION['nome'] = $farmacia['nome'];	
			header("Location:../viw/pgFarmacia.php");		

		}else{
			echo "Erro ao atualizar!";
		}	
		}

		
		

	
}

 ?>
