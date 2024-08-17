<?php
session_start();
$login = filter_input( INPUT_POST, "login");

if($login!=="mbelo") {
    http_response_code(401); // Unauthorized
} else {
    $_SESSION["autenticado"] =  $login;
}