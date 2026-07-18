<?php
/*Atividade 04 – Faixa etária
Crie um programa que classifique uma pessoa conforme sua idade. Armazene:
● nome e idade.
Condição:
● até 11 anos → Criança
● até 17 anos → Adolescente
● até 59 anos → Adulto
● acima disso → Idoso
Ao final, exiba:
● Nome
● Idade
● Classificação
Testes:
● Para estar certo, aplique testes para ver todas as possibilidades aparecendo na
tela: Criança, Adolescente, Adulto, Idoso.
*/

$nome = "Cauã";
$idade = 19;


echo("Nome:" . $nome . "<br>");
echo("idade:" . $idade . "<br>");

 
if($idade >= 0 && $idade <= 11) {
    echo ("Criança");
} elseif($idade >= 12 && $idade <= 17){
    echo("Adolescente");
} elseif ($idade >= 17 && $idade <= 59){
    echo ("Adulto");
} else{
    echo("Idoso");
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