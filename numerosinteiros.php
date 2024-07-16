<?php
// Solicita ao usuário que insira o primeiro número inteiro
echo "Digite o primeiro número inteiro:\n";

// Lê o primeiro número do usuário
$num1 = intval(trim(fgets(STDIN)));

// Solicita ao usuário que insira o segundo número inteiro
echo "Digite o segundo número inteiro:\n";

// Lê o segundo número do usuário
$num2 = intval(trim(fgets(STDIN)));

// Calcula a soma dos dois números
$resultado = $num1 + $num2;

// Exibe o resultado final da soma
echo "A soma de $num1 e $num2 é: $resultado\n";

