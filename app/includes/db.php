<?php
require_once 'config.php';

try {
    $pdo = new PDO('mysql:host= db' . ';dbname=' . MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
?>
