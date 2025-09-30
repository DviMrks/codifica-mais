<?php
echo "Se o valor da compra for menor que R$ 100,00, não há desconto." .PHP_EOL;
echo "Se o valor da compra for entre R$ 100,00 e R$ 500,00, aplica-se um desconto de 10%." . PHP_EOL;
echo "Se o valor da compra for maior que R$ 500,00, aplica-se um desconto de 20%." . PHP_EOL;

$valorCompra = readline("Digite o valor da compra: ") . PHP_EOL;
$percentualDesconto = 1;

function aplicarDesconto ($valorCompra, $percentualDesconto){
    return ($valorCompra - ($valorCompra * $percentualDesconto));
}

function calcularDescontoProgressivo ($valorCompra){
    if ($valorCompra < 100.00 ){
    return $valorCompra;
        } if ($valorCompra >= 100.00 && $valorCompra <= 500.00){
          $percentualDesconto = 0.1;
          return aplicarDesconto ($valorCompra, $percentualDesconto);
            } if ($valorCompra > 500.00){
              $percentualDesconto = 0.2;
              return aplicarDesconto ($valorCompra, $percentualDesconto);
            }
}


echo "O valor final foi de: " . calcularDescontoProgressivo ($valorCompra) . "R$";

