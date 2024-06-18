<?php

echo "Bem-vindo ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";
//$nomeFilme = "Thor: Ragnarok";
//$nomeFilme = "Se beber não case";

$anoLancamento = $argv[1] ?? 2022;

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
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é lançamento\n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação", 
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero";