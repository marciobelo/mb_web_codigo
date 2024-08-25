<?php
session_start();
$login = filter_input( INPUT_POST, "login");
$senha = filter_input( INPUT_POST, "senha");

if($login!=="mbelo" && $senha!=="patasDeGalinha") {
    http_response_code(401); // Unauthorized
} else {
    $_SESSION["autenticado"] =  $login;
}