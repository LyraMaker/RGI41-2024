<?php

$nota1 = $_POST['nota1']; // O $_POST['nota1'] pegará
$nota2 = $_POST['nota2']; // o valor da caixa de texto
$nota3 = $_POST['nota3']; // como name='nota1'

$media = ($nota1+$nota2+$nota3)/3;

echo "O resultado é: ".round($media,2);