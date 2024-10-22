<?php
$nome1 = readline("Digite o nome do 1°: ");
$salario1 = readline("Digite o salário do ".$nome1.": ");

echo "O salário do $nome1 é: ".calcularDesconto($salario1,5);

$nome2 = readline("Digite o nome do 2°: ");
$salario2 = readline("Digite o salário do ".$nome2.": ");

echo "O salário do $nome2 é: ".calcularAcrescimo($salario2,9);

function calcularDesconto(float $salario,float $desconto){
    $converterPorcentagem = $desconto/100;
    $valorDesconto = $salario * $converterPorcentagem;
    
    return $salario - $valorDesconto;
};

function calcularAcrescimo(float $salario,float $acrescimo){
    $converterPorcentagem = $acrescimo/100;
    $valorAcrescimo = $salario * $converterPorcentagem;
    
    return $salario + $valorAcrescimo;
};