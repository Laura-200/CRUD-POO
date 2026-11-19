<?php

require_once '../config/Database.php';

$conn = Database::conectar();

echo "Conexão realizada com sucesso!";
?>