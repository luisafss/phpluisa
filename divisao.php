<?php
// Solicita ao usuário que insira um nome
echo "Digite um nome:\n";

// Lê o nome do usuário
$nome = trim(fgets(STDIN));

// Solicita ao usuário que insira dois valores separados por espaço
echo "Digite dois valores separados por espaço:\n";

// Lê os valores do usuário
$entrada = fgets(STDIN);
$valores = explode(" ", trim($entrada));

// Verifica se foram inseridos exatamente dois valores
if (count($valores) == 2) {
    // Convertendo os valores para números de ponto flutuante
    $valor1 = floatval($valores[0]);
    $valor2 = floatval($valores[1]);

    // Verifica se o segundo valor não é zero para evitar divisão por zero
    if ($valor2 != 0) {
        // Realiza a divisão
        $resultado = $valor1 / $valor2;

        // Exibe o nome da pessoa e o resultado da divisão
        echo "Nome: $nome\n";
        echo "Resultado da divisão de $valor1 por $valor2: $resultado";
    } else {
        echo "Erro: divisão por zero não é permitida.";
    }
} else {
    echo "Erro: Por favor, insira exatamente dois valores separados por espaço.";
}

