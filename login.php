<?php
session_start(); // Inicia a sessão
    // login.php
    include 'admin/conexao.php';
    $email_cliente = $_POST['email_cliente'];
    $password = $_POST['password'];
    $id_cliente = 0;
    $sql = "select * from clientes where email='$email_cliente'
    and password='$password'";
    $busca_cliente = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca_cliente)) {
            $id_cliente = $array['id_cliente'];
            $nome_cliente = $array['nome_cliente'];
            $email_cliente = $array['email'];
            $password = $array['password'];
        }  
        if ($id_cliente == 0) {
            unset ($_SESSION['id_cliente']);
            unset ($_SESSION['nome_cliente']);
            header('location:cliente_rejeitado.php');
          }else{
            $_SESSION['id_cliente'] = $id_cliente;
            $_SESSION['nome_cliente'] = $nome_cliente;
            //echo($nome_cliente);
            header('location:index.php');
          }    
?>