<?php

$idade = 17;

echo "Você só pode entrar se tiver mais que 18 anos".PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";
} else {
    echo "Você tem $idade anos, Não pode entrar";
}