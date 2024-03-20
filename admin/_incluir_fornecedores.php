<?php
include '../admin/conexao.php';
$nome_fornecedor = $_POST['nome_fornecedor'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$email = $_POST['email'];
$celular = $_POST['celular'];

$sql = "INSERT INTO fornecedores (nome_fornecedor, cpf_cnpj, cep, logradouro, numero, complemento, bairro, cidade, uf ,email, celular) VALUES ('$nome_fornecedor','$cpf_cnpj','$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf','$email','$celular')";
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
  <a href="../admin/lista_fornecedores.php">Voltar</a>
</div>