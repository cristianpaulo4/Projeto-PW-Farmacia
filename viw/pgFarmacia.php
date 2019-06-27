
<?php session_start(); 
require_once '../Main/conexao.php';
require_once '../Model/produtoDAO.php';
require_once '../Model/vendaDAO.php';

$pedidos = new vendaDAO;
$pedidos = $pedidos->compraPorForncedor($conn);


$listaPedidos = array();
$listaCompra = array();

  foreach ($pedidos as $key => $value) {
    if ($value['farmacia_idfarmacia']==$_SESSION['id'] && $value['entrega']==0) {
      $pro = new produtoDAO;
      $compra = new vendaDAO;
      $compra=$compra->buscarCompraPorNum($conn, $value['farmacia_idfarmacia']);

      $pro = $pro->buscarProduto($conn, $value['idproduto']);     
      array_push($listaPedidos, $pro);
      array_push($listaCompra, $compra);
    }

  }

?>

<!DOCTYPE html>
<html>
<head>		
	

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




	<div>
		<!-- INICIO MENU LATERAL -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #DF0101 ; border-color: #DF0101; width: 230px; float: left; position: fixed;">

      <!-- Sidebar - Brand -->
      	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      	<div>
          <img src="http://www.bigfral.com.br/images/icon-farmaciapopular.png" style="width: 100%;">
      	</div>
        <div class="sidebar-brand-text mx-3">Farmacia Popular</div>
      	</a>

      <!-- Divider -->
      	<hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="">          
          <span>Farmacia</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Filtrar
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Faça seus cadastros:</h6>
            <a class="collapse-item" href="cadCliente.php">Clientes</a>
            <a class="collapse-item" href="cadProduto.php">Produtos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Gerencia</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gerenciar:</h6>
            <a class="collapse-item" href="listarProduto.php">Produto</a>
            <a class="collapse-item" href="listarCliente.php">Clientes</a>        
          </div>
        </div>
      </li>

       
     
      
    </ul>

    <!-- FIM MENU LATERAL -->
	</div>





  

  <!-- INICIO PRODUTO-->
	<div id="tela">
		<br>
  		<br>
  		<br>
  		<br>
  		<br>
		<div class="produto">			
			
      <?php   
      $p = new produtoDAO();
      $res;

      if (!empty($_GET['buscar'])) {      
            $res = $p-> buscarProdutoNome($conn, $_GET['buscar']);
        }else{
          $res = $p->listaProduto($conn);
        }

     
        foreach ($res as $key => $row){    
          echo "<div id='pro'>
          <div class='card' style='width: 18rem;'>
            <img style='height:250px; width:250px' class='card-img-top' src='../imagens/".$row['imagem']."' alt='Imagem de capa do card'>
            <div class='card-body'>
            <h5 class='card-title'>".$row['nome']."</h5>
            <h1 class='display-4' style='color:#8A0829'> R$:".$row['preco']."</h1>
          <p class='card-text'>".$row['descricao']."</p>  
          <a href='#' class='btn btn-primary' style = 'width: 100%; background-color:red; border-color: red'>Add Carrinho</a>        
          </div>
          
        </div>
        </div>
    
    ";}

  ?>

   <!-- FIM PRODUTO-->

    <!-- INICIO DA BARRA -->

  <div id="barra">
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="pgFarmacia.php">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar produtos" aria-label="Search" aria-describedby="basic-addon2" name="buscar">              
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" style="background: red ; border-color: red">
                  <i class="fas fa-search fa-sm" style="background: red"></i>
                </button>                
              </div>
            </div>
          </form>





          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>

                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-archive"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"><?php echo count($pedidos); ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header" style="background: red; border-color: red" >
                  Pedidos
                </h6>

                <?php  
             
              if (!empty($listaPedidos)) {
                 
                 foreach ($listaPedidos as $key => $value) {              
                  echo "<a class='dropdown-item d-flex align-items-center' href='telaFinalizar.php?id=".$value['idproduto']."'>
                  <img style='width: 60px'  class='rounded-circle' src='../imagens/".$value['imagem']."' alt='' >
                  <div class='dropdown-list-image mr-3'>
                   
                    <div class='status-indicator bg-success'></div>
                  </div>
                  <div class='text-truncate'>
                    <div class='text-truncate'>".$value['nome']."</div>              
                  </div>
                </a>";
               
              }
               
              }else{
                echo "<a class='dropdown-item d-flex align-items-center' href='#''>                 
                  <div class='text-truncate'>
                    <div class='text-truncate'>Sem pedidos!</div>              
                  </div>
                </a>";

              }
              
           

              

              ?>
               
                             
                
                



                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nome'];?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="UpdateFarmacia.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Meus Dados
                </a>
               
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
    </div>
	</div>	
 

	</div>
    <!-- INICIO DA BARRA -->



     <!-- Alerta sair da pagina-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Realmente deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Click em sim para sair</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  

</body>
</html>