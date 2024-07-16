<<?php
// Instruções para o usuário
echo "Digite 4 notas separadas por espaço e pressione Enter:\n";

// Lendo as notas do usuário
$entrada = fgets(STDIN); // fgets para leitura via console (STDIN)

// Convertendo a entrada em um array de notas
$notas = explode(" ", trim($entrada));

// Verificando se foram inseridas exatamente 4 notas
if (count($notas) == 4) {
    // Convertendo as notas para números de ponto flutuante
    $nota1 = floatval($notas[0]);
    $nota2 = floatval($notas[1]);
    $nota3 = floatval($notas[2]);
    $nota4 = floatval($notas[3]);

    // Calculando a média aritmética
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    // Exibindo as notas e a média
    echo "Notas inseridas: $nota1, $nota2, $nota3 e $nota4\n";
    echo "A média aritmética das notas é: $media";
} else {
    echo "Erro: Por favor, insira exatamente 4 notas separadas por espaço.";
}
?>







