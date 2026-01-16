<?php
//Verificação de Categoria
//1 - Escreva uma função chamada verificarCategoria que recebe um parâmetro de entrada representando uma categoria.
//2 - A função deve retornar uma mensagem de acordo com a categoria fornecida:
//  - Se a categoria for "eletrônicos", retornar "Essa categoria é de produtos eletrônicos".
//  - Se a categoria for "vestuário", retornar "Essa categoria é de produtos de vestuário".
//  - Se a categoria for "alimentos", retornar "Essa categoria é de produtos alimentícios".
//  - Para qualquer outra categoria, retornar "Categoria desconhecida".
//3 - O parâmetro de categoria será sempre fornecido como uma string.

$categoria = "eletrônicos";

function verificarCategoria($categoria){
    if($categoria == "eletrônicos"){
        echo "Essa categoria é de produtos eletrônicos";
    } else if($categoria == "vestuário"){
        echo "Essa categoria é de produtos de vestuário";
    } else if($categoria == "alimentos"){
        echo "Essa categoria é de produtos alimentícios";
    } else {
        echo "Categoria desconhecida";
    }
}
//Chamada da função
verificarCategoria($categoria);

?>