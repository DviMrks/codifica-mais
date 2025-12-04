<?php

$primeiroNumero = readline("Digite um numero: ");

$segundoNumero = readline("Digite um segundo numero: ");

if ($primeiroNumero > $segundoNumero){
    echo "O seu primeiro numero é maior que o segundo. $primeiroNumero > $segundoNumero";
}

if ($segundoNumero > $primeiroNumero){
    echo "O seu segundo numero é maior que o primeiro. $segundoNumero > $primeiroNumero";
} else {
    echo "O seus dois numeros são iguais.";
}
