<?php session_start(); 
require_once '../Main/conexao.php';
require_once '../Model/produtoDAO.php';

?>

<h1>Meus Produtos</h1>
<a href="../viw/pgFarmacia.php">Voltar</a>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<!-- -->
	<meta charset="utf-8">
  	 
  	<title>Farmacia Popular</title>
  <!-- Custom fonts for this template-->
  	<link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
  <!-- MEU CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/css.css"> 
    <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet"> 
</head>
<body>
	<div class="container">  
    <form method="GET" action="../viw/listarProduto.php">
    <input style="width: 500px" type="text" class="form-control" id="exampleInputPassword1" name="buscar" placeholder="Buscar Produto" name="produto" >
    <input type="submit" name="" value="Buscar">      
    </form>
  

  </div>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Imagem</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Qtd. Estoque</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	 
      $p = new produtoDAO();
      $res;

      if (!empty($_GET['buscar'])) {  
      $res = $p->buscarProdutoNome($conn,$_GET['buscar']);
             
      }else{       
      $res = $p->listaProduto($conn);         
       
      }
      
    
    foreach ($res as $key => $row){  

    if($row['farmacia_idfarmacia']==$_SESSION['id']){
echo "<tr>
      <th scope='row'>1</th>
      <td><img style='max-height: 150px' src='../imagens/".$row['imagem']."'></td>
      <td>".$row['nome']."</td>
      <td>".$row['preco']."</td>
      <td>".$row['qtd']."</td>
      <td><a href='../viw/alterarProduto.php?id=".$row['idproduto']."'><button type='button' class='btn btn-primary'>Editar</button></a></td>
      <td><a href='../Main/mainExcluirProduto.php?id=".$row['idproduto']."'><button type='button' class='btn btn-danger'>Excluir</button></a></td>
    </tr> ";
	}
    } 
  	
  	 ?>         
  </tbody>
</table>

</body>
</html>