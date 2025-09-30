<?php

$notasAlunos = [ 
[8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1 
[7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2 
[6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3 
[5.0, 4.6, 7.8, 9.0, 6.0]  // Aluno 4 
]; 

$quantidadeAprovado = 0;
$quantidadeReprovado = 0;

function calcularMedia($notas, $index){
    global $quantidadeAprovado;
    global $quantidadeReprovado;
    $somaNota = 0;
    foreach ($notas as $nota){
        $somaNota = $nota + $somaNota;
    }
    $media = $somaNota / (count($notas));

    if ($media < 7){
        $quantidadeReprovado += 1;
        echo "A média do aluno $index foi: " . $media . " .Ele está reprovado" . PHP_EOL;
    } else {
        $quantidadeAprovado += 1;
        echo "A média do aluno $index foi: " . $media . " .Ele está aprovado" . PHP_EOL;
    }

}

foreach ($notasAlunos as $index => $notas){
    calcularMedia($notas, $index);
}

echo "A quantidade de reprovados é: $quantidadeReprovado" . PHP_EOL;
echo "A quantidade de aprovados é: $quantidadeAprovado" . PHP_EOL;


