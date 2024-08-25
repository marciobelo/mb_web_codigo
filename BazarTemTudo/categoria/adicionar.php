<?php
require_once "../comum.php";
require_once BASE_DIR . "/somenteAutenticado.php";

use Mbelo\Bazar\Banco;

$descricao = filter_input(INPUT_POST, "descricao");

$pdo = Banco::obterConexao();
$ps = $pdo->prepare("insert into categoria (descricao) values (:descricao)");
$ps->bindParam(":descricao", $descricao, PDO::PARAM_STR);
$sucesso = $ps->execute();
if( $sucesso) {
    $id = $pdo->lastInsertId();
    http_response_code(201);
    echo json_encode([
        "id_categoria" => $id,
        "descricao" => $descricao
    ]);
}

