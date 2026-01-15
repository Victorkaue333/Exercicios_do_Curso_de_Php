<?php
//Comparação de Números
// 1 - Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.
// 2-  A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.
// 3 - Considere as seguintes condições:
//     - Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."
//     - Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."
//     - Se os números forem iguais, retorne a string "Os números são iguais."


$numero1 = 13;
$numero2 = 12;

function compararNumeros($numero1, $numero2) {

    if( $numero1 > $numero2 ){
        echo "O primeiro número é maior.";
    } else if($numero2 > $numero1){
        echo "O segundo número é maior.";
    } else if( $numero1 == $numero2 ){
        echo "Os números são iguais";
    } 

}


compararNumeros( $numero1, $numero2);
?>