<?php

include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $key = RAND(100000, 999999);

  $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_email = '$email' OR usu_login = '$usuario'";

  $resultado = mysqli_query($conexao, $sql);

  $resultado = mysqli_fetch_array($resultado)[0];

  if ($resultado >= 1) {
    echo "<script>window.alert('EMAIL JÁ CADASTRADO');</script>";
    echo "<script>window.location.href='../html/login.html';</script>";
  } else {
    $sql = "INSERT INTO usuarios(usu_login, usu_senha, usu_status, usu_key, usu_email) 
                VALUES('$usuario','$senha','s','$key','$email')";
    mysqli_query($conexao, $sql);

    echo "<script>window.alert('USUARIO CADASTRADO');</script>";
    echo "<script>window.location.href='../html/login.html';</script>";
  }
}
