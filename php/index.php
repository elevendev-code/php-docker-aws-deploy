<?php
$host = 'db';
$db   = 'mydb';
$user = 'user';
$pass = 'password';
$port = '5432';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";

try {
    $pdo = new PDO($dsn);
    // echo "<h2>Berhasil terhubung ke PostgreSQL!</h2>";

    // Ambil data dari tabel mahasiswa
    $query = $pdo->query("SELECT nama, nim FROM mahasiswa");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<h3>Data Mahasiswa:</h3>";
    foreach ($result as $row) {
        echo "Nama: " . htmlspecialchars($row['nama']) . "<br>";
        echo "NIM: " . htmlspecialchars($row['nim']) . "<br><br>";
    }
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
