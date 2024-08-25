<?php
session_start();
if( !isset($_SESSION["autenticado"])) {
    http_response_code(401);
    Header("Location: /BazarTemTudo/login.php");
}