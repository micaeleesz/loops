
<?php
$acimaLimite = 0;

for ($i = 1; $i <= 12; $i++) {
    echo "Digite a quantidade de faltas do aluno $i: ";
    $faltas = (int) readline();

    if ($faltas <= 15) {
        echo "Aluno $i está dentro do limite de faltas.";
    } else {
        echo "Aluno $i ultrapassou o limite de faltas.";
        $acimaLimite++;
    }
}
echo "quantidade de alunos que ultrapassaram o limite: $acimaLimite";
?>
