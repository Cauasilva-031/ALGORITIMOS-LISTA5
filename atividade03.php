<?php
/*Atividade 03 – Categoria de filme
Um cinema deseja classificar um filme conforme sua idade mínima. Armazene:
● a idade do espectador.
Condição:
● Se a idade for menor que 12 anos, exiba Filme Infantil.
● Senão, se for menor que 18 anos, exiba Filme para Adolescentes.
● Caso contrário, exiba Filme para Adultos.
Ao final, exiba:
● Idade
● Categoria
Testes:
● Para estar certo, aplique testes para ver todas as possibilidades aparecendo na
tela: Infantil, adolescentes e adultos
 */

 $idadeDoEspectador = 19;
 echo("Idade do espectador:" . $idadeDoEspectador . "<br>");
 

 if($idadeDoEspectador < 12 ){
    echo("Filme Infantil");
 } elseif($idadeDoEspectador < 18){
    echo("Filme para Adolescentes");
 } else {
    echo(" Filme para Adultos");
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