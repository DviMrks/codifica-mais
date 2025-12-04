<?php

echo "Digite a temperatura e a sua unidade de medida para converter para Celsius ou Fahrenheit" . PHP_EOL;

$Temperatura = (int) readline("Digite a temperatura (apenas numeros): ");
$UnidadeDeMedida = readline("Digite a unidade de medida da sua temperatura (°F ou °C): ");

if ($UnidadeDeMedida == "°F"){
    $FahrenheitParaCelcius = ($Temperatura - 32) * 5/9;
    echo "Temperatura: $Temperatura °F". PHP_EOL;
    echo "Temperatura para Celcius: $FahrenheitParaCelcius °C". PHP_EOL;
}

if ($UnidadeDeMedida == "°C"){
    $CelciusParaFahrenheit = ($Temperatura * 9/5) +32;
    echo "Temperatura: $Temperatura °C". PHP_EOL;
    echo "Temperatura para Fahrenheit: $CelciusParaFahrenheit °F". PHP_EOL;
}
