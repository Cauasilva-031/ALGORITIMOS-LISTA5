<?php
/*Atividade 07 – Temperatura
Um aplicativo deseja informar como está o clima. Armazene:
● temperatura.
Condição:
● abaixo de 15°C → Frio
● até 25°C → Agradável
● até 35°C → Quente
● acima disso → Muito quente
Ao final, exiba:
● Temperatura
● Situação
Testes:
● Para estar certo, aplique testes para ver todas as possibilidades aparecendo na
tela: Frio, Agradável, Quente, Muito quente     
*/


$temperatura = 36;

echo("Temperatura:" . $temperatura . "<br>");


if($temperatura >= 15 && $temperatura <=25 ){
    echo("Frio");
}elseif($temperatura >= 25 && $temperatura <= 30){
    echo(" Agradável");
}elseif($temperatura <= 35){
    echo("Quente");
}else{
    echo("Muito quente");
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