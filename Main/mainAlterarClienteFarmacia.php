<?php 
	
	session_start();

	require_once '../Main/conexao.php';
	require_once '../Model/clienteDAO.php';
	require_once '../Controle/conCliente.php';


	$dados = $_POST;


	$cliente = new clienteDAO();
	$c = new conCliente;

	$c -> setNome($dados['nome']);
	$c -> setTelefone($dados['telefone']);
	$c -> setCpf($dados['cpf']);
	$c ->setEstado($dados['estado']);
	$c ->setCidade($dados['cidade']);
	$c ->setBairro($dados['bairro']);
	$c ->setRua($dados['rua']);
	$c ->setNumero($dados['numero']);
	$c ->setLogin($dados['login']);
	$c ->setSenha($dados['senha']);

	$dados['nome'] = $c ->getNome();
	$dados['telefone'] = $c ->getTelefone();	
	$dados['cnpj'] = $c ->getCpf();
	$dados['estado'] = $c ->getEstado();
	$dados['cidade'] = $c ->getCidade();
	$dados['bairro'] = $c ->getBairro();
	$dados['rua'] = $c ->getRua();
	$dados['numero'] = $c ->getNumero();
	$dados['login'] = $c ->getLogin();
	$dados['senha'] = $c ->getSenha();


	$cliente ->alterarCliente($conn, $dados, $dados['codigo']);
	header("Location:../viw/pgFarmacia.php");
	


 ?>