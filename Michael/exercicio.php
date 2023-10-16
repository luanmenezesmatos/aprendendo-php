<?php
error_reporting(0); // Desabilita a exibição de erros

# EXERCÍCIO DA AULA

# CRIE UM CÓDIGO EM PHP QUE VALIDE O ALISTAMENTO MILITAR OBRIGATÓRIO
# LEMBRANDO QUE É PARA HOMENS A PARTIR DE 18 ANOS

$idade = $_GET["idade"];
$sexo = $_GET["sexo"];

if ($idade == "") {
    echo("Informe a idade na URL");
    exit;
}

if ($sexo == "") {
    echo("Informe o sexo (masculino/feminino) na URL");
    exit;
}

if ($idade >= 18 && $sexo == "masculino") {
    echo("Você deve se alistar, pois é maior de idade e do sexo masculino.");
} else {
    if ($sexo == "feminino") {
        echo("Você não precisa se alistar, pois é uma mulher.");
    } else {
        echo("Você não precisa se alistar, pois é menor de idade.");
    }
}

# QUEBRA DE LINHA
echo("<br><br>");

?>