<?php

include "conexao.php";

session_start();

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM usuarios WHERE usu_login = '$login' AND usu_senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);
    $total = mysqli_num_rows($resultado);

    $sqllog = "INSERT INTO tab_log (tab_query, tab_data) VALUES ('$sql', NOW())";
    
    if($total > 0) {
        $dados = mysqli_fetch_array($resultado);
        if ($dados['usu_status'] == 's') {
            $_SESSION['usu_id'] = $dados['usu_id'];
            echo "<script>alert('Login efetuado com sucesso!');</script>";
            header("Location: backoffice.php");
            exit;
        } else {
            echo "<script>alert('Usuário inativo!');</script>";
        }
    } else {
        echo "<script>alert('Login ou senha incorretos!');</script>";
    }
}

?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="">
            <label>Login:</label>
            <input type="text" name="login" />
            <br />
            <label>Senha:</label>
            <input type="password" name="senha" />
            <br />
            <input type="submit" value="Entrar" />
        </form>
    </body>
</html>