<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal_penjualan = $_POST['tanggal']; 
    $nama_produk = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah']; 
    $total_penjualan = $harga * $jumlah_terjual;

    $query = "INSERT INTO penjualan (tanggal_penjualan, nama_produk, harga, jumlah_terjual, total_penjualan) VALUES ('$tanggal_penjualan', '$nama_produk', '$harga', '$jumlah_terjual', '$total_penjualan')";
    
    if ($mysqli->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}
?>