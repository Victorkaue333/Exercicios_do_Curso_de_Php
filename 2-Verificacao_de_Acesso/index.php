<?php
//Verificação de Acesso
//1 - Escreva uma função chamada verificarAcesso que recebe dois parâmetros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso.
//2 -A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local.
//3 - Considere as seguintes condições:
//  - Se a idade for maior ou igual a 18 anos e a autorização for verdadeira, retorne a string "Acesso autorizado".
//  - Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos".
//  - Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorização necessária".


$idade = 19;
$autorizacao = false;
function verificarAcesso( $idade, $autorizacao){
    if($idade >= 18 && $autorizacao == true){
        echo "Acesso autorizado";
    }else if($idade <= 18){
        echo "Acesso negado. Idade mínima requerida: 18 anos";
    }else if($idade >= 18 && $autorizacao == false){
        echo "Acesso negado. Autorização necessária";
    }

}

verificarAcesso( $idade, $autorizacao);


?>