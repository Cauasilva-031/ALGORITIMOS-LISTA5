<?php
/*Atividade 02 – Classificação de notas
Uma escola deseja classificar a nota de um aluno. Armazene:
● o nome do aluno e a nota final.
Condição:
● Se a nota for maior ou igual a 90, exiba Excelente.
● Senão, se for maior ou igual a 70, exiba Bom.
● Senão, se for maior ou igual a 60, exiba Regular.
● Caso contrário, exiba Reprovado.
Exibição dentro do PHP mesmo:
● Nome do aluno - ex: echo(“Nome do aluno:” . $nomeAluno . “<br>”);
● Nota - echo(“Nota:” . $nota . “<br>”);
● Situação - echo(“Situação:” . $situacao . “<br>”);
Testes:
● É parte da função de programador testar todas as possibilidades dadas. Neste
exercício:
○ aplique à variável notas valores maior que 90 para ver a saída Excelente;
○ aplique à variável notas valores entre 70 e 89 para ver a saída Bom;
○ aplique à variável notas valores entre 60 e 69 para ver a saída Regular;
○ aplique à variável notas valores notas abaixo de para ver a saída
Reprovado;


*/

$nomeAluno = "Cauã";
$notaFinal = 99.5;

echo("Nome do aluno:" . $nomeAluno . "<br>");
 
if($notaFinal >= 90 && $notaFinal <= 100) {
    echo ("Situação: Excelente");
} elseif($notaFinal >= 70 && $notafinal <90){
    echo("Situação: boa");
} elseif($notaFinal >= 60 && $notaFinal <70){
    echo ("Situação: Regular");
} elseif($notafinal >= 0 && $notaFinal <60){
    echo ("Situação: Reprovada");
} else {
    echo ("Situaçao: Opção inválida");
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