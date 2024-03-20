<?php
include '../admin/conexao.php';
$id_usuario = $_POST['id_usuario'];
$sql = "DELETE FROM usuarios WHERE usuarios.id_usuario='$id_usuario'";
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
  <h4>Usuário Excluido com Sucesso</h4>
</div>
<div>
  <a href="../admin/lista_usuarios.php">Voltar</a>
</div>