<?php
$soma = 0;

for ($i = 1; $i <= 7; $i++) {
    echo "Digite a temperatura do dia $i: ";
    $temperatura = (float) readline();

    $soma += $temperatura;

    if ($i == 1 || $temperatura > $maior) {
        $maior = $temperatura;
    }
}

$media = $soma / 7;

echo "Temperatura média: " . number_format($media, 2, ',', '.') . " graus";
echo "Maior temperatura registrada: $maior graus";
?>