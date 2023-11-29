<?php

# Dados de conexão com o banco de dados

# Nome do host da base de dados
$db_host = "localhost";

# Usuário do banco de dados
$db_username = "root";

# Senha do banco de dados
$db_password = "";

# Nome do banco de dados
$db_name = "saguadim";

$conexao = mysqli_connect($db_host, $db_username, $db_password, $db_name);
