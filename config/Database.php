<?php

require_once __DIR__ . '/credenciais.php';

class Database {

    private static $conn;

    public static function conectar() {

        if (!self::$conn) {

            self::$conn = new PDO(
                "pgsql:host=" . DB_HOST . ";port=5432;dbname=" . DB_NAME,
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );

        }

        return self::$conn;
    }
}
?>