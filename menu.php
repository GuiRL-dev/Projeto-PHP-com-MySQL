<!-- menu.php -->
<?php
// session_start();
//   $id_cliente = $_SESSION['id_cliente'];
//   $nome_cliente = $_SESSION['nome_cliente'];
//   if($id_cliente == ""){
//     header('location:index.php');
//   }
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo_nossaloja.png" width="130px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Politica de privacidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="#">Sair</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>