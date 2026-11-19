<?php

require_once '../repositories/SorveteRepository.php';

if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT) || $_GET['id'] <= 0) {
    die("ID inválido!");
}

$repo = new SorveteRepository();

$sorvete = $repo->buscarPorId($_GET['id']);

if (!$sorvete) {
    die("Sorvete não encontrado!");
}

$repo->excluir($_GET['id']);

header("Location: index.php");
exit;

?>