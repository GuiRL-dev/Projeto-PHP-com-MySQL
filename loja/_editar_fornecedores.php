<?php
include 'conexao.php';
$id_fornecedor = $_POST['id_fornecedor'];
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
$sql = "UPDATE fornecedores SET id_fornecedor='$id_fornecedor', nome_fornecedor='$nome_fornecedor', cpf_cnpj='$cpf_cnpj', cep='$cep', logradouro='$logradouro', numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', uf='$uf', email='$email', celular='$celular' WHERE fornecedores.id_fornecedor = $id_fornecedor";
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
  <h4>Fornecedor Editado com Sucesso</h4>
</div>
<div>
  <a href="lista_fornecedores.php">Voltar</a>
</div>