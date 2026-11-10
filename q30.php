<?php
echo "Digite o valor do saque: ";
$v = readline();

if ($v % 2 != 0 || $v < 0) {
    echo "Saque nao pode ser realizado com o valor exato.\n";
} else {
    $q10 = 0;
    $q2 = 0;
    $ok = false;

    for ($i = intval($v / 10); $i >= 0; $i--) {
        $r = $v - ($i * 10);
        if ($r % 2 == 0) {
            $q10 = $i;
            $q2 = $r / 2;
            $ok = true;
            break;
        }
    }

    if ($ok) {
        echo "Notas de R$ 10,00: $q10\n";
        echo "Notas de R$ 2,00: $q2\n";
    } else {
        echo "Saque nao pode ser realizado com o valor exato.\n";
    }
}
?>