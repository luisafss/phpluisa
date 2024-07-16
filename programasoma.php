<?php
// Instruções para o usuário
echo "Digite 5 valores separados por espaço:\n";

// Lendo os valores do usuário
$entrada = fgets(STDIN); // fgets para leitura via console (STDIN)

// Convertendo a entrada em um array de valores
$valores = explode(" ", trim($entrada));

// Verificando se foram inseridos exatamente 5 valores
if (count($valores) == 5) {
    // Convertendo os valores para números inteiros
    $valores = array_map('intval', $valores);

    // Somando os quatro primeiros valores
    $soma = $valores[0] + $valores[1] + $valores[2] + $valores[3];

    // Obtendo o quinto valor
    $quinto_valor = $valores[4];

    // Verificando se o quinto valor não é zero para evitar divisão por zero
    if ($quinto_valor != 0) {
        // Realizando a divisão
        $resultado = $soma / $quinto_valor;

        // Exibindo os resultados
        echo "Valores inseridos: " . implode(", ", $valores) . "\n";
        echo "A soma dos quatro primeiros valores é: " . $soma . "\n";
        echo "O quinto valor é: " . $quinto_valor . "\n";
        echo "O resultado da divisão da soma pelo quinto valor é: " . $resultado;
    } else {
        echo "Erro: divisão por zero não é permitida.";
    }
} else {
    echo "Erro: Por favor, insira exatamente 5 valores separados por espaço.";
}
?>
