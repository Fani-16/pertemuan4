<?php
include "koneksi.php";

// Pastikan menggunakan POST untuk menghapus
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $mysqli->prepare("DELETE FROM penjualan WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" untuk integer

    if ($stmt->execute()) {
        // Jika berhasil, redirect ke index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>