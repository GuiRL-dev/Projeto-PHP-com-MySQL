<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Lista de Usuarios</title>
</head>

<body>
  <?php
  include 'menu.php';
  include 'conexao.php';
  ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID, Usuário</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM usuarios";
      $busca_categoria = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca_categoria)) {
        $id_usuario = $array['id_usuario'];
        $nome_usuario = $array['nome_usuario'];
        $email_usuario = $array['email_usuario'];
        $password = $array['password'];
        ?>
        <tr>
          <td>
            <?php
            echo $id_usuario
              ?>
          </td>
          <td>
            <?php
            echo $nome_usuario
              ?>
          </td>
          <td>
            <?php
            echo $email_usuario
              ?>
          </td>
          <td>
            <?php
            echo $password
              ?>
          </td>
          <td>
            <a href="editar_usuarios.php?id_usuario=<?php echo $id_usuario ?>"class="btn btn-danger">Editar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <a href="incluir_usuarios.php" class="btn btn-danger">Inserir</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>