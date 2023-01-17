<?php

//QUANTIDADE DE PATOS

$patinhos = readline('Digite a quantidade de patinhos: ');

//VALIDAR QUANTIDADE

if (!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) {
    echo "O número de patinhos digirado é inválido.\n";
    echo "Envie um valor maior que um e menor que 10";
    exit();
}

//INTERAR QUANTIDADE


for ($i = $patinhos; $i > 0; $i--) {
    echo  "\n";
    echo $i !=1 ? $i." patinhos foram passear\n"
    : "1 patinho foi passear\n";
    echo "Além das montanhas\n";
    echo "Para brincar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá\n";

    //CONDICAO PARA RESTANTE DE PATOS
    switch ($i){
        case 2:
            echo "Mas só 1 patinho voltou de lá\n";
            break;
        case 1:
            echo "Mas nenhum patinho voltou de lá\n";
            break;
        default:
            echo "Mas só ".($i -1)." patinhos voltaram de lá\n";
            break;
    }

}
    echo "\n";
    echo "A mamãe patinha foi procurar\n";
    echo "Além das montanhas\n";
    echo"Na beira do mar\n";
    echo"A mamãe gritou: Quá, quá, quá, quá\n";
    echo"E os ".$patinhos." patinhos voltaram de lá\n";
