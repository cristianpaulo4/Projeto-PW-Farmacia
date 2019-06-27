<?php 
require_once '../Controle/Endereco.php';
	
	class conCliente extends Endereco
	{

	private $idCliente;
	private $telefone;
	private $nome;
	private $cpf;
	private $login;
	private $senha;


	//INICIO DO SET
	public function setTelefone($telefone)
	{
		if (is_string($telefone)) {
			$this -> telefone = $telefone;
		}else{
			echo "Erro telefone";
		}
	}
	public function setNome($nome)
	{
		if (is_string($nome)) {
			$this -> nome = $nome;
		}else{
			echo "Erro nome";
		}
	}
	public function setCpf($cpf)
	{
		if (is_string($cpf)) {
			$this -> cpf = $cpf;
		}else{
			echo "Erro cpf";
		}
	}
	public function setLogin($login)
	{
		if (is_string($login)) {
			$this -> login = $login;
		}else{
			echo "Erro login";
		}
	}
	public function setSenha($senha)
	{
		if (is_string($senha)) {
			$this -> senha = $senha;
		}else{
			echo "Erro senha";
		}
	}



	//FIM DO SET
	// INICIO DO GET
	public function getIdCliente()
	{
		return $this -> idCliente;
	}

	public function getTelefone()
	{
		return $this -> telefone;
	}

	public function getNome()
	{
		return $this -> nome;
	}

	public function getCpf()
	{
		return $this -> cpf;
	}
	public function getLogin()
	{
		return $this -> login;
	}

	public function getSenha()
	{
		return $this -> senha;
	}



	// FIM DO GET



		
		
	}
	


 ?>