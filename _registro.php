<?php
include 'admin/conexao.php';
$nome_cliente = $_POST['nome_cliente'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$celular = $_POST['celular'];
$email_cliente = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO clientes (nome_cliente, cpf_cnpj, cep, logradouro, numero, complemento, bairro, cidade, uf, celular, email, `password`) VALUES ( '$nome_cliente', '$cpf_cnpj', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$celular', '$email_cliente', '$password')";
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
  <h4>Usuário Registrado com Sucesso</h4>
</div>
<div>
  <a href="index.php">Voltar</a>
</div>