<?php

$servidor = "localhost";
$banco = "ecommerce";
$usuario = "adm";
$senha = 123;

$link = mysqli_connect($servidor, $usuario, $senha, $banco);

echo("<style>body{color: white; font-family: 'Helvetica'}</style> Conectado ao banco de dados!");