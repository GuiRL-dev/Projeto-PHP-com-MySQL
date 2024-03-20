<?php
include("../admin/menu.php");
include("../admin/conexao.php");
$id_categoria = $_GET ["id_categoria"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Editar Categorias</title>
</head>

<body>
  <h4>Alteração de Categotrias</h4>
  <form action="../admin/_editar_categorias.php" method="post">
    <?php
    $sql = "SELECT * FROM categorias WHERE id_categoria = $id_categoria";
    $buscar = mysqli_query($conexao,$sql);
    while($array = mysqli_fetch_array($buscar)) {
    $id_categoria = $array['id_categoria'];
    $desc_categoria = $array['desc_categoria'];
    ?>
    <input type="hidden" name="id_categoria" value="<?php echo $id_categoria ?>">
    <label>Editar</label>
    <input type="text" name="desc_categoria" value="<?php echo $desc_categoria ?>">
    <button type="submit" id="botao">Aplicar Edições</button>
    <?php } ?>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>