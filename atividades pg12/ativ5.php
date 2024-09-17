<?php

$numeroConta = readline("Digite o número da conta: ");
$saldo = readline("Digite o saldo atual: ");
$deposito = readline("Valor total depositado: ");
$saque = readline("Valor total do saque: ");

$saldo -= $saque;   // ou $saldo += $deposito - $saque
$saldo += $deposito; // ou $saldo = $saldo = $deposito - $saque

echo "O valor atualizado é de $saldo";
