<?php
include '../admin/conexao.php';
$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$password = $_POST['password'];
$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, `password`) VALUES ( '$nome_usuario', '$email_usuario', '$password')";
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
  <h4>Usuário Adicionado com Sucesso</h4>
</div>
<div>
  <a href="../admin/lista_usuarios.php">Voltar</a>
</div>