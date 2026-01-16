<?php
//Cálculo de Desconto
//1 - Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.
//2 - A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.
//3 - Considere as seguintes categorias e seus respectivos descontos:
//  - "eletrônicos": 10% de desconto.
//  - "vestuário": 20% de desconto.
//  - "alimentos": 5% de desconto.
//  - Outras categorias: nenhum desconto.
//4 - Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.
//5 - O valor do produto e a categoria serão sempre fornecidos como argumentos da função.


$valor = 200;
$categoria = "eletrônicos";


function calcularDesconto($valor, $categoria) {
    switch($categoria) {
        // Para categoria de Eletrônicos
        case "eletrônicos":
            return $valor - ($valor * 0.10);
            break;

        // Para categoria de Vestuário
        case "vestuário":
            return $valor - ($valor * 0.20);
            break;

        // Para categoria de Alimentos
        case "alimentos":

            return $valor - ($valor * 0.05);
            break;
        
        // Para outras categorias
        default:
        echo"O produto é de outra categoria que não está inserida no desconto <br>";
            return $valor;
            break;
    }
}

// Testando a função
$valorComDesconto = calcularDesconto($valor, $categoria);
echo "<br> O valor Original é: R$ " . $valor . "<br>";
echo "Categoria: " . $categoria . "<br>";
echo "Valor com desconto: R$ " . $valorComDesconto;


?>