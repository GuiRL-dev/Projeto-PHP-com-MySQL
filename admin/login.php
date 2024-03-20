<?php
session_start(); // Inicia a sessão
    // login.php
    include '../admin/conexao.php';
    $email_usuario = $_POST['email_usuario'];
    $password = $_POST['password'];
    $id_usuario = 0;
    $sql = "select * from usuarios where email_usuario='$email_usuario'
    and password='$password'";
    $busca_usuario = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca_usuario)) {
            $id_usuario = $array['id_usuario'];
            $nome_usuario = $array['nome_usuario'];
            $email_usuario = $array['email_usuario'];
            $password = $array['password'];
        }  
        if ($id_usuario == 0) {
            unset ($_SESSION['id_usuario']);
            unset ($_SESSION['nome_usuario']);
            header('location:../admin/usuario_rejeitado.php');
          }else{
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nome_usuario'] = $nome_usuario;
            //echo($nome_usuario);
            header('location:../admin/principal.php');
          }    
?>