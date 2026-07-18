<?php
/*Atividade 05 – Desconto em compras
Uma loja oferece descontos conforme o valor da compra. Armazene:
● nome do cliente e valor da compra.
Condição:
● R$ 1.000 ou mais → 15% de desconto
● R$ 500 ou mais → 10%
● R$ 200 ou mais → 5%
● abaixo disso → Sem desconto
Calcule:
● valor do desconto;
● valor final.
Ao final, exiba:
● Cliente
● Valor da compra
● Desconto
● Valor final
Testes:
● Para estar certo, aplique testes para ver todas as possibilidades aparecendo na
tela: 15%, 10%, 5% e sem desconto

*/


$nomeCliente = "Cauã";
$valorCompra = 1.5000;
$valor1 = 1.000;
$valor2 = 500;
$valor3 = 200;
$desconto1 = 1.000 - 15 / 100;
$desconto2 = 500 - 10 / 100;
$desconto3 = 200 -  5 / 100;

echo("Nome do cliente :" . $nomeCliente . "<br>");
echo("Valor do desconto :" . $valor1 . "<br>");


if ($valorCompra >= 1.000 && $valorCompra <= 500){
  
    echo("Desconto de 15%");
   


}


















?>



















<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>