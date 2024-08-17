<?php
    $vezes = filter_input(INPUT_COOKIE,"contador");

    if( !isset($vezes)) {
        $vezes = 0;
    }

    setcookie("contador", ++$vezes);

    Header("Content-Type: application/json");
    echo json_encode([ "vezes" => $vezes]);