<?php

$funcionario1 = [
    "nome" => "Pedro",
    "salarioBase" => 2500.00,
    "horasExtras" => 10
];

$funcionario2 = [
    "nome" => "Renata",
    "salarioBase" => 3000.00,
    "horasExtras" => 5
];

$funcionario3 = [
    "nome" => "Sérgio",
    "salarioBase" => 2800.00,
    "horasExtras" => 8
];

$funcionario4 = [
    "nome" => "Vanessa",
    "salarioBase" => 3200.00,
    "horasExtras" => 12
];

$funcionario5 = [
    "nome" => "André",
    "salarioBase" => 1700.00,
    "horasExtras" => 0
];

$funcionarios = [
    $funcionario1, $funcionario2, $funcionario3, $funcionario4, $funcionario5
];

function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra){
    return $salarioTotalCalculo = $salarioBase + ($valorHoraExtra * $horasExtras * 1.5);
}

function listarFuncionarios($funcionarios){
    foreach ($funcionarios as $funcionario){

        $salarioBase = $funcionario["salarioBase"];
        $horasExtras = $funcionario["horasExtras"];
        $valorHoraExtra = ($salarioBase / 160);


        $salarioTotal = calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra);

        echo 
        "Nome do funcionario: " . $funcionario["nome"] . 
        ", salário base: " . $funcionario["salarioBase"] .
        ", horas extras: " . $funcionario["horasExtras"] .
        ", salário final: " . $salarioTotal . PHP_EOL;
    }
}

echo listarFuncionarios($funcionarios);