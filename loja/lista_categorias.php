<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Lista de Categorias</title>
</head>

<body>
  <?php
  include 'conexao.php';
  ?>
  <a href="incluir_categorias.php" class="btn btn-success">Editar</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID, Categoria</th>
        <th>Descrição</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM categorias";
      $busca_categoria = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca_categoria)) {
        $id_categoria = $array['id_categoria'];
        $desc_categoria = $array['desc_categoria'];
        ?>
        <tr>
          <td>
            <?php
            echo $id_categoria
              ?>
          </td>
          <td>
            <?php
            echo $desc_categoria
              ?>
          </td>
          <td>
            <a href="editar_categorias.php?id_categoria=<?php echo $id_categoria ?>"class="btn btn-warning">Editar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>