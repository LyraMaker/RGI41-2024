<?php
$valorA = readline("Digite o valor de A: ");
$valorB = readline("Digite o valor de B: ");
$valorC = readline("Digite o valor de C:");

echo "O resultado da expressão é: ".problema($valorA,$valorB,$valorC);

function problema(float $a,float $b,float $c){
    return ($a*$b-10)/$c * $c**2/5;

}