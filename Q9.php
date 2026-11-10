<?php

$soma = 0;

do {
    $numero = (int) readline("Digite um número (0 para sair): ");

    $soma = $soma + $numero;

} while ($numero != 0);

echo "A soma dos números é: " . $soma . "\n";

?>
