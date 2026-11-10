<?php
echo "Digite a quantidade de modelos de IA: ";
$qtdModelos = (int)readline();

echo "Digite a quantidade de testes realizados por cada modelo: ";
$qtdTestes = (int)readline();

$maiorMedia = -1;
$melhorModelo = 0;

for ($i = 1; $i <= $qtdModelos; $i++) {
    $somaNotas = 0;
    
    echo "\nAvaliando o Modelo $i:\n";
    
    for ($j = 1; $j <= $qtdTestes; $j++) {
        echo "Digite a nota do teste $j (0 a 100): ";
        $nota = (float)readline();

        if ($nota < 50) {
            $classificacao = "baixo";
        } elseif ($nota >= 50 && $nota <= 79) {
            $classificacao = "moderado";
        } else {
            $classificacao = "alto";
        }

        $somaNotas += $nota;
    }

    $media = $somaNotas / $qtdTestes;
    echo "Media de desempenho do Modelo $i: " . number_format($media, 2, ',', '.') . "\n";

    if ($i == 1 || $media > $maiorMedia) {
        $maiorMedia = $media;
        $melhorModelo = $i;
    }
}

echo "\nO modelo que obteve a maior media de desempenho foi o Modelo $melhorModelo com media de " . number_format($maiorMedia, 2, ',', '.') . ".\n";
?>