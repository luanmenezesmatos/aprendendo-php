<?php

$nomeservidor = "localhost";
$usuario = "root";
$bancodedados = "dentalclinic";
$senha = "";

// Criar a conexão com o banco de dados

$conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

// Verificar a conexão com o banco de dados

if (!$conn) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}