<?php

// Iniciar a sessão
session_start();

include 'conexao.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if ($row['senha'] == $senha) {
      // Usuário autenticado com sucesso

      $tipo_usuario = $row['tipo_usuario'];

      // Redirecionar com base no tipo de usuário
      switch ($tipo_usuario) {
        case 'paciente':
          header('Location: pacientes/index.php');
          break;
        case 'dentista':
          header('Location: dentistas/index.php');
          break;
        case 'administrador':
          header('Location: administracao/index.php');
          break;
        default:
          echo "Tipo de usuário desconhecido";
          break;
      }

      // Pegar o ID e o Nome do usuário para inserir no $_SESSION
      $id_usuario = $row['id'];
      $nome_usuario = $row['nome'];

      // Criar a variável global $_SESSION
      $_SESSION['id_usuario'] = $id_usuario;
      $_SESSION['nome_usuario'] = $nome_usuario;
    } else {
      echo "E-mail ou senha incorretos!";
    }
  } else {
    echo "O e-mail informado não existe!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-1/assets/css/login-1.css" />
  <title>Login - DentalClinic</title>
</head>

<body>
  <form action="login.php" method="POST">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
    <input type="submit" value="Entrar">
  </form>
</body>

</html>