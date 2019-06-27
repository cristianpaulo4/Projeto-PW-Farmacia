<?php
  require_once '../Controle/Endereco.php';

  class conFarmacia extends Endereco
  {

    private $idFarmacia;
    private $nome;
    private $telefone;
    private $email;
    private $cnpj;
    private $login;
    private $senha;


    // INCIO DO SET
  public function setNome($nome)
  {
    if(is_string($nome)){
      $this -> nome = $nome;
    }
  

  }

  public function setTelefone($telefone)
  {
    if(is_string($telefone)){
      $this -> telefone = $telefone;
    }
    
  }

  public function setEmail($email)
  {
    if(is_string($email)){
      $this -> email = $email;
    }
  }

  public function setCnpj($cnpj)
  {
    if(is_string($cnpj)){
      $this -> cnpj = $cnpj;
    }
  }

  public function setLogin($login)
  {
    if(is_string($login)){
      $this -> login = $login;
    }
  }
  public function setSenha($senha)
  {
    if(is_string($senha)){
      $this -> senha = $senha;
    }
  }
   // FIM DO SET

  // INICIO DO GET

  public function getId()
  {
    return $this-> idFarmacia;
  }
  public function getNome()
  {
    return $this-> nome;
  }

  public function getTelefone()
  {
    return $this-> telefone;
  }

  public function getEmail()
  {
    return $this-> email;
  }

  public function getCnpj()
  {
   return $this-> cnpj;
  }

  public function getLogin()
  {
    return $this-> login;
  }

  public function getSenha()
  {
    return $this-> senha;
  }
  // FIM DO GET











  }

 ?>
