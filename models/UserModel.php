<?php
// models/UserModel.php
require_once 'config/config.php';

class UserModel {
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
        $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getUsers() {
        $stmt = $this->pdo->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser($nome, $telefone, $senha) {
        $stmt = $this->pdo->prepare('INSERT INTO users (nome, telefone, senha) VALUES (:nome, :telefone, :senha)');
        $stmt->execute([
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT)
        ]);
    }

    public function getUserByPhone($telefone) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE telefone = :telefone');
        $stmt->execute([':telefone' => $telefone]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getPhone($telefone) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE telefone = :telefone');
        $stmt->execute([':telefone' => $telefone]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyPassword($senha, $hashedSenha) {
        return password_verify($senha, $hashedSenha);
    }
}
?>
