<?php
error_reporting(0); // Desabilita a exibição de erros

# OPERADORES MATEMÁTICOS
# + (adição)
# - (subtração)
# * (multiplicação)
# / (divisão)
# ^ (exponenciação)
# % (módulo)

# Pegar os valores da URL
# http://localhost/operadores_matematicos/op_math.php?num1=10&num2=5
$numero1 = $_GET["num1"];
$numero2 = $_GET["num2"];

if ($numero1 == "" || $numero2 == "") { // Verifica se os valores foram informados
    echo("Informe os valores na URL");
    exit;
}

if (!is_numeric($numero1) || !is_numeric($numero2)) { // Verifica se os valores são numéricos
    echo("Informe apenas números");
    exit;
}

echo("A soma de ".$numero1." + ".$numero2." é igual a: ".($numero1 + $numero2)."<br>");
echo("A subtração de ".$numero1." - ".$numero2." é igual a: ".($numero1 - $numero2)."<br>");
echo("A multiplicação de ".$numero1." * ".$numero2." é igual a: ".($numero1 * $numero2)."<br>");
echo("A divisão de ".$numero1." / ".$numero2." é igual a: ".($numero1 / $numero2)."<br>");
echo("A exponenciação de ".$numero1." ^ ".$numero2." é igual a: ".($numero1 ** $numero2)."<br>");
echo("O módulo de ".$numero1." % ".$numero2." é igual a: ".($numero1 % $numero2)."<br>");
?>