<?php
$opcao = 1;

while ($opcao != 0) {
    echo "--- MENU ---\n";
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";

    $opcao =  readline("Escolha uma opção: ");

    if ($opcao == 1) {
        echo "Executando: Cadastrar aluno...\n";
    } elseif ($opcao == 2) {
        echo "Executando: Consultar aluno...\n";
    } elseif ($opcao == 3) {
        echo "Executando: Excluir aluno...\n";
    } elseif ($opcao == 0) {
        echo "Saindo do programa...\n";
    } else {
        echo "Opção inválida!\n";
    }
}
?>