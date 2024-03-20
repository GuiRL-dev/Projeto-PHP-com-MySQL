<?php
include '../admin/conexao.php';
$desc_categoria = $_POST['desc_categoria'];
$id_categoria = $_POST['id_categoria'];
$sql = "UPDATE categorias SET desc_categoria = '$desc_categoria' WHERE categorias.id_categoria = $id_categoria";
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
  <h4>Categoria Editada com Sucesso</h4>
</div>
<div>
  <a href="../admin/lista_categorias.php">Voltar</a>
</div>