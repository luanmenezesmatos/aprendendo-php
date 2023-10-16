<?php

# TIPOS DE DADOS EM PHP

# STRING (texto)
# INTEGER (número inteiro)
# FLOAT (número decimal)
# BOOLEAN (verdadeiro ou falso)
# ARRAY (vetor)

# UTILIZANDO VARIÁVEIS EM PHP

# EXEMPLO 1:
$nomeCompleto = "Luan Menezes"; // string

# EXEMPLO 2:
$idade = 17; // integer

# EXEMPLO 3:
$altura = 1.80; // double ou float - números decimais

# EXEMPLO 4:
$verdadeiro = true; // boolean
$falso = false; // boolean

# EXEMPLO 5:
$cores = array("azul", "vermelho", "verde"); // array

# IMPRIMIR TODOS OS VALORES NA TELA
echo($nomeCompleto."<br>");
echo($idade."<br>");
echo(number_format($altura, 2)."<br>"); // number_format() formata o número com duas casas decimais
echo($verdadeiro."<br>");
echo($falso."<br>");
echo("Cores:"." ". $cores[0].", ".$cores[1]." e ".$cores[2]."<br><br>");
?>