<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Sorvete.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class SorveteRepository implements RepositoryInterface {

    private $conn;

    public function __construct() {
        $this->conn = Database::conectar();
    }

    public function criar($sorvete) {

        $sql = "INSERT INTO sorvetes (nome, sabor, preco)
                VALUES (:n, :s, :p)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':n' => $sorvete->getNome(),
            ':s' => $sorvete->getSabor(),
            ':p' => $sorvete->getPreco()
        ]);
    }

    public function listar() {

        $stmt = $this->conn->query(
            "SELECT * FROM sorvetes ORDER BY id"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {

        $stmt = $this->conn->prepare(
            "SELECT * FROM sorvetes WHERE id = :id"
        );

        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $sorvete) {

        $sql = "UPDATE sorvetes
                SET nome = :n, sabor = :s, preco = :p
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':n' => $sorvete->getNome(),
            ':s' => $sorvete->getSabor(),
            ':p' => $sorvete->getPreco(),
            ':id' => $id
        ]);
    }

    public function excluir($id) {

        $stmt = $this->conn->prepare(
            "DELETE FROM sorvetes WHERE id = :id"
        );

        $stmt->execute([':id' => $id]);
    }
}
?>