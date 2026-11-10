<?php

$total = 0;

for ($i = 1; $i <= 5; $i++) {
    echo "Digite a quantidade vendida no dia $i: ";
    $quantidade = (int) readline();

    $total += $quantidade;
}

echo "Total de unidades vendidas: $total";
?>


?>