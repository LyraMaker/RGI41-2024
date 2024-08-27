<?php

$nota1 = readline("Digite sua 1ª nota: ");
$nota2 = readline("Digite sua 2ª nota: ");
$nota3 = readline("Digite sua 3ª nota: ");

$media = ($nota1+$nota2+$nota3)/3;

echo "O resultado é: ".round($media,2);