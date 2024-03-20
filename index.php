<!-- Vamos fazer nossa Loja -->
<html>
<head>
    <title>Nossa Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
      include 'menu.php';
      include 'admin/conexao.php';
    ?>
    <div>
    <a href="#">Cadastre-se</a> <a href="#">Login</a>
    </div>
    <br/>
    <br/>
    <div class="row align-items-start">
    <div class="col">    
    <label>Selecione a Categoria</label>
    <select name="categoria" class="form-control">
      <?php
      $sql = "select * from categorias order by desc_categoria";
      $busca_categoria = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca_categoria)) {
        $id_categoria = $array['$id_categoria'];
        $desc_categoria = $array['desc_categoria'];
      ?>
        <option value="<?php echo($id_categoria)?>"><?php echo($desc_categoria)?></option>

        <?php } ?>
    </select>
    </div>
    <div class="col">
    </br>
    <button type="submit" id="botao" class="btn btn-primary">Selecionar</button>
    </div>
    </div>
    <br/>
    <div class="row align-items-start">
    <?php
    $sql = "select * from produtos INNER JOIN categorias on produtos.id_categoria=categorias.id_categoria INNER JOIN fornecedores on produtos.id_fornecedor=fornecedores.id_fornecedor order by produtos.desc_produto";
    $busca_produto = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($busca_produto)) {
        $id_produto = $array['id_produto'];
        $desc_produto = $array['desc_produto'];
        $desc_categoria = $array['desc_categoria'];
        $nome_fornecedor = $array['nome_fornecedor'];
        $preco = $array['preco'];
        $imagem = $array['imagem'];
    ?>
    <div class="col-4">
       <div class="card">
          <img src="img/<?php echo("$imagem")?>" alt="..." width="250" height="250" style="align-self: center;">
          <div class="card-body">
              <h5 class="card-title"><?php echo("$desc_produto")?></h5>
              <p class="card-text">R$ <?php echo(number_format($preco,2,",","."))?></p>
              <a href="#" class="btn btn-primary">Adicione ao carrinho</a>
          </div>
       </div>
    </div>
    <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>