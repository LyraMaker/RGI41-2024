<?php


function calcularDesconto(float $salario,float $desconto){
    $converterPorcentagem = $desconto/100;
    $valorDesconto = $salario * $converterPorcentagem;
    
    echo "O valor do salário é: ".$salario - $valorDesconto;
    echo "O desconto foi de: $valorDesconto";
};