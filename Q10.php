<?php
$numero = 0;

while ($numero != 20) {

$numero = (int) readline("Digite um número ");

    
if ($numero < 20) {
echo "menor que o número \n";
}
elseif ($numero > 20){
echo "maior que o número\n";
}
    else {echo "acertou o número";
}
}
?>