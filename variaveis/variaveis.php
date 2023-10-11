<?php

# UTILIZANDO VARIÁVEIS EM PHP

# Variáveis são espaços na memória do computador que armazenam valores temporariamente.
# Em PHP, as variáveis são representadas por um cifrão ($) seguido pelo nome da variável.
# O nome da variável é case-sensitive.
# O valor da variável pode ser uma string de texto, um número ou um array.

$nome = "Luan";
echo($nome."<br><br>"); // Luan

$sobrenome = "Menezes";
echo($sobrenome."<br><br>"); // Menezes

$nomeCompleto = $nome." ".$sobrenome;
echo($nomeCompleto); // Luan Menezes

?>