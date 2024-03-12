<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Lista de Fornecedores</title>
</head>

<body>
  <?php
  include 'menu.php';
  include 'conexao.php';
  ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID, Fornecedor</th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Cep</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>UF</th>
        <th>Email</th>
        <th>Celular</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM fornecedores";
      $busca_categoria = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca_categoria)) {
        $id_fornecedor = $array['id_fornecedor'];
        $nome_fornecedor = $array['nome_fornecedor'];
        $cpf_cnpj = $array['cpf_cnpj'];
        $cep = $array['cep'];
        $logradouro = $array['logradouro'];
        $numero = $array['numero'];
        $complemento = $array['complemento'];
        $bairro = $array['bairro'];
        $cidade = $array['cidade'];
        $uf = $array['uf'];
        $email = $array['email'];
        $celular = $array['celular'];
        ?>
        <tr>
          <td>
            <?php
            echo $id_fornecedor
            ?>
          </td>
          <td>
            <?php
            echo $nome_fornecedor
              ?>
          </td>
          <td>
            <?php
            echo $cpf_cnpj
              ?>
          </td>
          <td>
            <?php
            echo $cep
              ?>
          </td>
          <td>
            <?php
            echo $logradouro
              ?>
          </td>
          <td>
            <?php
            echo $numero
              ?>
          </td>
          <td>
            <?php
            echo $complemento
              ?>
          </td>
          <td>
            <?php
            echo $bairro
              ?>
          </td>
          <td>
            <?php
            echo $cidade
              ?>
          </td>
          <td>
            <?php
            echo $uf
              ?>
          </td>
          <td>
            <?php
            echo $email
              ?>
          </td>
          <td>
            <?php
            echo $celular
              ?>
          </td>
          <td>
            <a href="editar_fornecedores.php?id_fornecedor=<?php echo $id_fornecedor ?>"class="btn btn-warning">Editar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <a href="incluir_fornecedores.php" class="btn btn-success">Inserir</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>