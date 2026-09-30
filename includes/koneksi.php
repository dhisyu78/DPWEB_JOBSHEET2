<?php
$host = "localhost";
$port = "5432";
$db   = "simpus_mini";
$user = "postgres"; // Sesuaikan jika user PostgreSQL Anda berbeda
$pass = "postgres"; // Sesuaikan jika password PostgreSQL Anda berbeda

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}