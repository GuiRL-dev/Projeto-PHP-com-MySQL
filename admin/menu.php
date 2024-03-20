<!-- menu.php -->
<?php
session_start();
  $id_usuario = $_SESSION['id_usuario'];
  $nome_usuario = $_SESSION['nome_usuario'];
  if($id_usuario == ""){
    header('location:../admin/admin.php');
  }
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#"><img src="..img//logo_nossaloja.png" alt="logo-da-loja" width="130px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/principal.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lista_produtos.php">Produtos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="lista_categorias.php">Categorias</a></li>
            <li><a class="dropdown-item" href="lista_fornecedores.php">Fornecedores</a></li>
            <li><a class="dropdown-item" href="lista_usuarios.php">Usuários</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>