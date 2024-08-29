<?php
require_once("../comum.php");
require_once(BASE_DIR . "/somenteAutenticado.php");

use Mbelo\Bazar\Banco;

$id_categoria = filter_input(INPUT_POST, "id_categoria");
$descricao = filter_input(INPUT_POST, "descricao");

$pdo = Banco::obterConexao();
$ps = $pdo->prepare("update categoria set descricao=:descricao where id_categoria=:id_categoria");
$ps->bindParam(":id_categoria", $id_categoria, PDO::PARAM_INT);
$ps->bindParam(":descricao", $descricao, PDO::PARAM_STR);
$sucesso = $ps->execute();
if( $sucesso) {
    http_response_code(200);
    echo json_encode([
        "id_categoria" => $id_categoria,
        "descricao" => $descricao
    ]);
}

