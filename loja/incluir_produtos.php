<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Incluir Produtos</title>
</head>

<body>
  <?php
  include 'menu.php';
  ?>
  <h4>Inclusão de Produtos</h4>
  <form action="_incluir_usuarios.php" method="post">
    <label>Nome do Produto</label>
    <input type="text" name="desc_produto" required>
    <label>Categoria</label>
    <select name="id_categoria" class="form-control">
      <option value="1">Camisetas</option>
      <option value="2">Calças</option>
      <option value="3">Moletons</option>
      <option value="4">Conjuntos</option>
      <option value="5">Toucas</option>
      <option value="6">Adesivos</option>
    </select>
    <label>Senha</label>
    <input type="text" name="password" required>
    <button type="password" id="botao">Cadastrar</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>