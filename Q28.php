<?php
$a = 0;
$b = 0;
$c = 0;

for ($i = 1; $i <= 10; $i++) {
    echo "Digite o peso: ";
    $p = readline();

    if ($p < 100) {
        $a++;
    } elseif ($p >= 100 && $p <= 200) {
        $b++;
    } else {
        $c++;
    }
}

echo "Pequenos: $a\n";
echo "Medios: $b\n";
echo "Grandes: $c\n";
?>