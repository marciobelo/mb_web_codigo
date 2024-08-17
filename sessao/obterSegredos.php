<?php
session_start();
if( isset($_SESSION["autenticado"])) {

    $login = $_SESSION["autenticado"];

    Header("Content-Type: application/json");
    echo json_encode([
        "autenticado" => $login,
        "segredos" => [
            "Possui uma pequena coleção de computadores antigos.",
            "Joga futebol. Mal, mas joga.",
            "Já foi piloto amador de kart.",
            "Começou a programar em Basic para o Apple II"
        ]
        ]);
} else {
    http_response_code(401);
}