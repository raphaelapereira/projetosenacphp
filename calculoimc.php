<?php
// Função para classificar o IMC
function classificarIMC($imc) {
    // Array associativo contendo as faixas de IMC e suas classificações
    $faixas = [
        ["min" => 0.0,   "max" => 18.5,  "classificacao" => "Magreza"],
        ["min" => 18.51, "max" => 24.9,  "classificacao" => "Saudável"],
        ["min" => 25.0,  "max" => 29.9,  "classificacao" => "Sobrepeso"],
        ["min" => 30.0,  "max" => 34.9,  "classificacao" => "Obesidade Grau I"],
        ["min" => 35.0,  "max" => 39.9,  "classificacao" => "Obesidade Grau II"],
        ["min" => 40.0,  "max" => 999,   "classificacao" => "Obesidade Grau III"]
    ];

    // Variável para armazenar a classificação final
    $classificacaoEncontrada = "Não classificado";

    // Percorre o array para encontrar a faixa correta
    foreach ($faixas as $faixa) {
        if ($imc >= $faixa["min"] && $imc <= $faixa["max"]) {
            $classificacaoEncontrada = $faixa["classificacao"];
            break; // Encerra o loop assim que encontrar a faixa correta
        }
    }

    // Exibe o resultado formatado
    echo "Atenção, seu IMC é " . number_format($imc, 2, ',', '.') . 
         ", e você está classificado como " . $classificacaoEncontrada . ".";
}

// -------------------------------
// Chamada da função
// -------------------------------

// Valor de IMC informado (pode ser alterado para testar outras faixas)
$valorIMC = 25.30;

// Chama a função passando o valor do IMC
classificarIMC($valorIMC);
?>
