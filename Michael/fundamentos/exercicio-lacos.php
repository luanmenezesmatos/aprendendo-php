<?php

error_reporting(0);

# 1 - Usando laços de repetição crie uma sequência numérica de números Pares em linha de 0 - 500
for ($i = 0; $i <= 500; $i++) {
    if ($i % 2 == 0) {
        $seq_num_pares .= $i . " ";
    }
}

# 2 - Usando laços de repetição crie uma sequência numérica de Impares em linha de 500 - 0
for ($i = 500; $i > 0; $i--) {
    if ($i % 2 != 0) {
        $seq_num_impares .= $i . " ";
    }
}

# Exibir na tela as duas sequências numéricas
echo "<b>Sequência numérica de números pares:</b> $seq_num_pares";
echo "<br><br>";
echo "<b>Sequência numérica de números ímpares:</b> $seq_num_impares";

?>