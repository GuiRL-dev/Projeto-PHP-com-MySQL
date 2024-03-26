<?php
include ("admin/conexao.php");
include ("menu.php");
session_start();
if (isset ($_SESSION['nome_cliente'])) {
  $id_cliente = $_SESSION['id_cliente'];
  $nome_cliente = $_SESSION['nome_cliente'];
  $id_item = $_GET['id_item'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Nossa Loja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php
    $sql = "select *, carrinho_itens.quantidade as qtde from carrinho_itens INNER JOIN produtos on carrinho_itens.id_produto=produtos.id_produto where id_item=$id_item";
    $buscar = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($buscar)) {
      $id_produto = $array['id_produto'];
      $desc_produto = $array['desc_produto'];
      $quantidade = $array['qtde'];
      $preco = $array['preco'];
    }
    ?>
    <form action="_editar_itens.php" method="post">
      <p>Produto:
        <?php echo ($desc_produto) ?>
      </p>
      <input type="hidden" name="id_item" value="<?php echo($id_item) ?>">
      <p>Insira a quantidade: <input type="number" min="1" name="quantidade" value="<?php echo($quantidade)?>"></p>
      <button type="submit" id="botao" class="btn btn-primary">Atualizar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>