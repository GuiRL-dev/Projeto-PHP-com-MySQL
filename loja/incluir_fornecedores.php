<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Incluir Fornecedores</title>
</head>

<body>
  <?php
  include 'menu.php';
  ?>
  <div class="container">
    <h4>Inclusão de Fornecedores</h4>
    <form action="_incluir_fornecedores.php" method="post">
      <label>Nome do Fornecedor</label>
      <input class="form-control" type="text" name="nome_fornecedor" required>
      <label>CPF ou CNPJ</label>
      <input class="form-control" type="text" name="cpf_cnpj" required>
      <label>CEP</label>
      <input class="form-control" type="text" name="cep" required>
      <label>Logradouro</label>
      <input class="form-control" type="text" name="logradouro" required>
      <label>Número</label>
      <input class="form-control" type="text" name="numero" required>
      <label>Complemento</label>
      <input class="form-control" type="text" name="complemento">
      <label>Bairro</label>
      <input class="form-control" type="text" name="bairro" required>
      <label>Cidade</label>
      <input class="form-control" type="text" name="cidade" required>
      <label>UF</label>
      <input class="form-control" type="text" name="uf" required>
      <label>Email</label>
      <input class="form-control" type="email" name="email" required>
      <label>Celular</label>
      <input class="form-control" type="number" name="celular" required >
      <button type="submit" id="botao">Cadastrar</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>