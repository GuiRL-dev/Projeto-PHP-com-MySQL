<?php
include '../admin/conexao.php';
$desc_categoria = $_POST['desc_categoria'];
$sql = "INSERT INTO categorias (desc_categoria) VALUES ('$desc_categoria')";
$inserir = mysqli_query($conexao, $sql);
?>

<head>
  <style>
    div {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<div>
  <h4>Categoria Adicionada com Sucesso</h4>
</div>
<div>
  <a href="../admin/lista_categorias.php">Voltar</a>
</div>