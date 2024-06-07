<?php

echo "Bem-vindo ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";
$anoLacamento = 2022;

// $somaDeNotas = (9 + 6 + 7.5 + 5 + 8);

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 7.5;
$somaDeNotas += 5;
$somaDeNotas += 8;

$notaFilme = $somaDeNotas / 5;
$incluidoNoPlano = true;

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";