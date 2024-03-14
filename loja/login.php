<?php
  include("conexao.php");
  $email_usuario = $_POST['email_usuario'];
  $password = $_POST['password'];
  $id_usuario = 0;

  $sql = "SELECT * FROM usuarios WHERE email_usuario='$email_usuario' AND `password`='$password'";
  $busca_usuarios = mysqli_query($conexao, $sql);
    while($array = mysqli_fetch_array($busca_usuarios)) {
      $id_usuario = $array['id_usuario'];
      $nome_usuario = $array['nome_usuario'];
      $email_usuario = $array['email_usuario'];
      $password = $array['password'];
    }
    if($id_usuario == 0){
      header('location:usuario_rejeitado.php');
    }
    else{
      header('location:principal.php');
    }