<?php
//UNIDADE VALIDAS PARA O SISTEMA

$unidades =[
    'mm' => 1,
    'cm'=> 10,
    'm'=> 1000,
    'km'=> 1000000
];

//TEXTO DAS UNIDADES VÁLIDAS

$unidadesValidas = implode(',', array_keys($unidades));
do {
    //SOLICITA A UNIDADE BASE PARA USUÁRIO
    $unidadeBase = readline('Digite a unidade base (' . $unidadesValidas . '): ');

    //MENSAGEM DE ERRO
    if (!isset($unidades[$unidadeBase])) {
        echo "Digite uma unidade válida:\n";
        }
    }while (!isset($unidades[$unidadeBase]));

    do {
        //SOLICITA O VALOR BASE PARA USUÁRIO
        $valorBase = readline('Digite o valor base: ');

        //MENSAGEM DE ERRO
        if (!is_numeric($valorBase)) {
            echo "Valor base inválido:\n";
        }
    }while (!is_numeric($valorBase));

    //VALOR EM MILIMETROS
$valorMilimetro = $valorBase * $unidades[$unidadeBase];

echo "\nResultados:\n";

//IMPRIME AS UNIDADES DO SISTEMA

foreach ($unidades as $unidade => $divisor){
    //IGNORA A IMPRESSÃO DA UNIDADE BASE
    if ($unidade == $unidadeBase)continue;
    //IMPRIME O VALOR CORRESPONDENTE A UNIDADE
    echo " > ".($valorMilimetro / $divisor). " ". $unidade."\n";
}
