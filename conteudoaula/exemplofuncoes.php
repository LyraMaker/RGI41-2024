<?php

$media1 = calcularMedia(1,3,4);
$media2 = calcularMedia(4,5,10);
$media3 = calcularMedia(5,6,7);

function calcularMedia(float $nota1,float $nota2,float $nota3){
    return ($nota1+ $nota2+ $nota3)/3;
}