<?php
include "koneksi.php";

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];

$query = "UPDATE penjualan SET tanggal_penjualan='$tanggal', nama_produk='$nama', harga='$harga', jumlah_terjual='$jumlah', total_penjualan='$total' WHERE id=$id";
if ($mysqli->query($query) === TRUE) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . $mysqli->error;
}

header("Location: index.php");
?>