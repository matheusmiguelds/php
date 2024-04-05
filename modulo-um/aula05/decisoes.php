<?php

$idade = 17;
$acompanhamento = 1;

echo "Você só pode entrar se tiver mais que 18 anos ou a partir de 16 anos acompanhado".PHP_EOL;

if ($idade >= 18)
    echo "Você tem $idade anos. Pode entrar".PHP_EOL;
elseif ($idade >= 16 && $acompanhamento > 0) 
    echo "Você tem $idade anos, mas veio acompanhado(a). Pode entrar".PHP_EOL;
else 
    echo "Você tem $idade anos, Não pode entrar".PHP_EOL;


echo "Adeus!";