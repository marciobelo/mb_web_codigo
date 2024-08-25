<?php
require_once "../comum.php";
require_once BASE_DIR . "/somenteAutenticado.php";

use Mbelo\Bazar\Banco;

$pdo = Banco::obterConexao();
$stmt = $pdo->query("select * from categoria");
$categorias = $stmt->fetchAll();

echo json_encode($categorias);
