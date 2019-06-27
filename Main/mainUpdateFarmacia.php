<?php
session_start();
require_once '../Main/conexao.php';
require_once '../Model/farmaciaDAO.php';
require_once '../Controle/conFarmacia.php';

$dados = $_POST;

$f = new conFarmacia;
$farmacia = new farmaciaDAO;

$f ->setNome($dados['nome']);
$f ->setTelefone ($dados['telefone']);
$f ->setEmail($dados['email']);
$f ->setCnpj($dados['cnpj']);
$f ->setEstado($dados['estado']);
$f ->setCidade($dados['cidade']);
$f ->setBairro($dados['bairro']);
$f ->setRua($dados['rua']);
$f ->setNumero($dados['numero']);
$f ->setLogin($dados['login']);
$f ->setSenha($dados['senha']);

$dados['nome'] = $f ->getNome();
$dados['telefone'] = $f ->getTelefone();
$dados['email'] = $f ->getEmail();
$dados['cnpj'] = $f ->getCnpj();
$dados['estado'] = $f ->getEstado();
$dados['cidade'] = $f ->getCidade();
$dados['bairro'] = $f ->getBairro();
$dados['rua'] = $f ->getRua();
$dados['numero'] = $f ->getNumero();
$dados['login'] = $f ->getLogin();
$dados['senha'] = $f ->getSenha();

// cadastrar farmacia 
$farmacia -> alterarFarmacia($conn,$dados,$_SESSION['id']);











?>
