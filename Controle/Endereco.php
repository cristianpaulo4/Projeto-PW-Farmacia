<?php

abstract class  Endereco
 {
  private $estado;
  private $cidade;
  private $bairro;
  private $rua;
  private $numero;


  // INCIO DO SET

  public function setEstado($estado)
  {
    if(is_string($estado)){
      $this -> estado = $estado;
    }else{
      echo "Erro ao inserir estado";
    }
  }

  public function setCidade($cidade)
  {
    if(is_string($cidade)){
      $this -> cidade = $cidade;
    }else{
      echo "Erro ao inserir cidade";
    }
  }

  public function setBairro($bairro)
  {
    if(is_string($bairro)){
      $this -> bairro = $bairro;
    }else{
      echo "Erro ao inserir bairro";
    }
  }

  public function setRua($rua)
  {
    if(is_string($rua)){
      $this -> rua = $rua;
    }else{
      echo "Erro ao inserir rua";
    }
  }

  public function setNumero($numero)
  {
    if(is_numeric($numero)){
      $this -> numero = $numero;
    }else{
      echo "Erro ao inserir numero";
    }
  }
  // FIM DO SET
  //INICIO DO GET 
  public function getEstado()
  {
    return $this-> estado;
  }
  public function getCidade()
  {
    return $this-> cidade;
  }
  public function getBairro()
  {
    return $this-> bairro;
  }
  public function getRua()
  {
    return $this-> rua;
  }
  public function getNumero()
  {
    return $this-> numero;
  }

  // FIM DO GET












 }


 ?>
