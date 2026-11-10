<?php
$i = readline("digite a senha: ");
$senha = 1234;

while ($i != $senha) {
    echo "tente novamente\n";
    $i = readline("digite a senha: "); 
}

echo "entrada permitida\n";
?>
