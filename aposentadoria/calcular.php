<?php
$params = filter_input_array(INPUT_POST, [
    "nome" => FILTER_SANITIZE_STRING,
    "idade" => FILTER_SANITIZE_NUMBER_INT,
    "tempoContribuicao" => FILTER_SANITIZE_NUMBER_INT,
    "sexo" => FILTER_SANITIZE_STRING,
    "especial" => FILTER_VALIDATE_BOOLEAN
]);
$fator = ($params["sexo"] === "M") ? 95 : 85;
if( $params["especial"]) {
    $fator -= 5;
}
$tempoRestante = $fator - $params["idade"] - $params["tempoContribuicao"];

$tempoRestante = max([ 0, $tempoRestante ]);

Header("Content-Type: application/json");
echo json_encode([ "falta" => $tempoRestante ]);