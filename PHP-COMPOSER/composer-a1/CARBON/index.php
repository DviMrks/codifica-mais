<?php

//CONFIGURAÇÕES DO CARBON

require_once 'vendor/autoload.php';
use Carbon\Carbon;

//LENDO E FORMATANDO A DATA DE ANIVERSÁRIO DO USUÁRIO

$diaAniversario = readline("Digite o dia do seu aniversário: ");
$mesAniversario = readline("Digite o mês do seu aniversário: ");
$anoAniversario = readline("Digite o ano do seu aniversário: ");

$dataFormatada = Carbon::create($anoAniversario, $mesAniversario, $diaAniversario, 0);

//ECOANDO A DATA FORNECIDA

echo "Você nasceu em: $diaAniversario/$mesAniversario/$anoAniversario!" . PHP_EOL;

//1_ Mostrar quantos dias faltam para o seu próximo aniversário.

$anoAtual = Carbon::now()->year;
$adicaoDeUmAno = 1;
$proximoAno = $anoAtual + $adicaoDeUmAno;
$proximoAniversario = Carbon::create($proximoAno, $mesAniversario, $diaAniversario);
$dataAtual = Carbon::now('-3:00');

$diasProximoAniversario = $dataAtual->diffInDays($proximoAniversario);

echo "Faltam $diasProximoAniversario dias para o seu proximo aniversário!" . PHP_EOL;

//2_Calcular quantos anos de vida você tem.

$anosDeVida = $anoAtual - $anoAniversario;

echo "Você tem $anosDeVida anos de idade!" . PHP_EOL;

//3_Calcular quantos dias de vida você tem.  

$diasDeVida = $dataFormatada->diffInDays($dataAtual);

echo "Você tem $diasDeVida dias de vida!" . PHP_EOL;

//4_Mostrar que dia da semana você nasceu.

$mapaSemanal = [
    0 => "Domingo",
    1 => "Segunda-feira",
    2 => "Terça-feira",
    3 => "Quarta-feira",
    4 => "Quinta-feira",
    5 => "Sexta-feira",
    6 => "Sábado"
];

$diaDaSemanaKey = $dataFormatada->dayOfWeek;
$diaDaSemana = $mapaSemanal[$diaDaSemanaKey];

echo "Você nasceu no seguinte dia da semana: $diaDaSemana!" . PHP_EOL;

//?_Mostrar quantos anos de vida lhe restam...

$idadeMediaDeVida = 70;
$anosQueLheRestam = $idadeMediaDeVida -$anosDeVida;

echo "Te faltam apenas $anosQueLheRestam ANOS de vida!!!";





