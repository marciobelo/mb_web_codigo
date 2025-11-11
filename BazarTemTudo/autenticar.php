<?php
session_start();
$login = filter_input( INPUT_POST, "login");
$senha = filter_input( INPUT_POST, "senha");

if($login==="mbelo" && $senha==="patasDeGalinha") {
    $_SESSION["autenticado"] =  $login;
} else {
    http_response_code(401); // Unauthorized
}