<?php
session_start();
 
include("conexao.php");
 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
 
    $sql = "SELECT COUNT(usu_id) FROM usuarios 
        WHERE usu_email = '$email' 
        AND usu_senha = '$senha' AND usu_status = 's'";
   
    $retorno = mysqli_query($conexao, $sql);
    while($tbl = mysqli_fetch_array($retorno)){
        $resultado = $tbl[0];
    }

    $sql ='"'.$sql.'"';
    $sqllog ="INSERT INTO tab_log (tab_query, tab_data)
    VALUES ($sql, NOW())";
    mysqli_query($conexao, $sqllog);
    if ($resultado == 0){
        echo"<script>window.alert('Usuário incorreto!');</script>";
    }
    else{
        $sql = "SELECT * FROM usuarios 
        WHERE usu_email = '$email'
        AND usu_senha = '$senha'
        AND usu_status = 's'";
    $retorno = mysqli_query($conexao,$sql);

    $sql ='"'.$sql.'"';
    $sqllog ="INSERT INTO tab_log (tab_query, tab_data)
    VALUES ($sql, NOW())";
    mysqli_query($conexao, $sqllog);
 
    while($tbl = mysqli_fetch_array($retorno)){
        $_SESSION['idusuario'] = $tbl[0];
        $_SESSION['nomeusuario'] = $tbl[1];
    }
        echo"<script>window.location.href='backoffice.php';</script>";
    }
 
}
 
?>