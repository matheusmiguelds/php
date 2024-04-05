<?php

$num = 10;
echo "Numeros impares de 0 a $num:".PHP_EOL;
for ($i = 0; $i <= $num; $i++) {
    if ($i % 2 == 1) echo "$i".PHP_EOL;
}