<?php
$soma = 0;

for ($i = 1; $i <= 5; $i++) {
    echo "Digite a nota do aluno $i: ";
    $nota = (float) readline();
    $soma += $nota;
}

$media = $soma / 5;

echo "A média da turma é: " . number_format($media, 2, ',', '.') . PHP_EOL;
?>