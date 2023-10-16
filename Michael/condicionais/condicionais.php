<?php

# CONDICIONAIS
# == (igual)

# EXEMPLO 1:
# CONDICIONAL DE IGUALDADE DE STRINGS

$variavel1 = 10;
$variavel2 = "10";

if ($variavel1 == "" || $variavel2 == "") {
    echo("Informe os valores na URL");
    exit;
}

if ($variavel1 == $variavel2) {
    echo("As variáveis são iguais");
} else {
    echo("As variáveis são diferentes");
}

# QUEBRA DE LINHA
echo("<br><br>");

# EXEMPLO 2:
# CONDICIONAL QUE VERIFICA MESMO DATA TYPE

if ($variavel1 === $variavel2) {
    echo("Mesmo data type");
} else {
    echo("Data type diferente");
}

# QUEBRA DE LINHA
echo("<br><br>");

# EXEMPLO 3:
# OPERADOR TERNÁRIO (IF DE UMA LINHA SÓ)

echo($variavel1 == $variavel2 ? "As variáveis são iguais" : "As variáveis são diferentes")

?>