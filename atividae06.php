<?php
/*Atividade 06 – Conceito do aluno
Uma escola deseja classificar o desempenho de um aluno de acordo com sua nota
final. Armazene:
● o nome do aluno e a nota final.
Condição:
● Se a nota for maior ou igual a 90, exiba Conceito A.
● Senão, se a nota for maior ou igual a 80, exiba Conceito B.
● Senão, se a nota for maior ou igual a 70, exiba Conceito C.
● Senão, se a nota for maior ou igual a 60, exiba Conceito D.
● Caso contrário, exiba Conceito E.
Ao final, exiba:
● Nome do aluno
● Nota
● Conceito
Testes:
● Para estar certo, aplique testes para ver todas as possibilidades aparecendo
na tela: A, B, C, D, E
*/

$nomeAluno = "Cauã";
$notaFinal = 90;
echo("Nome do aluno :" . $nomeAluno . "<br>");



if ($notaFinal >= 90 && $notaFinal <= 100){
    echo("Conceito A");
} elseif($notaFinal >= 80 && $notaFinal <= 90){
    echo("Conceito B");
}elseif($notaFinal >= 70 && $notaFinal <=80){
    echo("Conceito C");
}elseif($notaFinal >= 60 && $notaFinal <= 70){
    echo ("Conceito D");
}else{
    echo("Conceito E");
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