<?php
$total=0; 
for ($i = 1; $i <= 7; $i++) {
    echo "Digite o consumo de água $i: ";
    $consumo = (float) readline();
$total += $consumo;
echo"este é o consumo de água final  $total";

    }
?>