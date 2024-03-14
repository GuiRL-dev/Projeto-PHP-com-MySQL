<?php
include("menu.php");
include("conexao.php");
$id_usuario = $_GET['id_usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Excluir Usuarios</title>
</head>

<body>
  <h4>Excluir um Usuario</h4>
  <form action="_excluir_usuarios.php" method="post">
    <?php
    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $buscar = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($buscar)) {
      $id_usuario = $array['id_usuario'];
      $nome_usuario = $array['nome_usuario'];
      $email_usuario = $array['email_usuario'];
      $password = $array['password'];
      ?>
      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
      <h5>Nome do Usuário</h5>
      <p><?php echo $nome_usuario ?></p>
      <h5>Email do Usuário</h5>
      <p><?php echo $email_usuario ?></p>
      <h5>Senha do Usuario</h5>
      <p><?php echo $password ?></p>
      <button class="btn btn-danger" type="submit" id="botao">Excluir</button>
    <?php } ?>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>