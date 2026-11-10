
<?php
echo "Digite um número inteiro não negativo: ";
$num = (int) readline();

$fatorial = 1;

if ($num < 0) {
    echo "Erro: digite um número não negativo.";
} else {
    for ($i = 1; $i <= $num; $i++) {
        $fatorial *= $i;
    }

    echo "O fatorial de $num é: $fatorial";
}
?>
