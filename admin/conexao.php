<?php
$servername="localhost";
$database="loja";
$username="root";
$password="";

$conexao=mysqli_connect($servername, $username, $password, $database);
if(mysqli_connect_errno()){echo "". mysqli_connect_error();}