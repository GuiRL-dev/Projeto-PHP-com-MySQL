<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Incluir Usuarios</title>
</head>

<body>
  <?php
  include '../admin/menu.php';
  ?>
  <h4>Inclusão de Usuarios</h4>
  <form action="../admin/_incluir_usuarios.php" method="post">
    <label>Nome do Usuário</label>
    <input type="text" name="nome_usuario" required>
    <label>Email do Usuário</label>
    <input type="email" name="email_usuario" required>
    <label>Senha</label>
    <input type="text" name="password" required>
    <button type="password" id="botao">Cadastrar</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>