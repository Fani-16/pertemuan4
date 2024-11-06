<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM penjualan WHERE id = $id";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penjualan</title>
    <style>
       .container{
            width: 500px;
            margin: 0 auto;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 110%;
        }
        button {
            background-color: #34495e; 
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color: #B0C4DE;
        }  
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: 'Times New Roman';
            font-size: 15px;        
        }
        label {
            display: block;
            margin-bottom: 2px;
        }
        th, td {
            text-align: left;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }  
        h3 {
            color: #34495e; 
            font-size: 1.5em; 
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <center>
    <h2>Edit Data Penjualan</h2>
    <div class="container">
    <form method="post" action="proses_edit.php">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <label for="tanggal">Tanggal Penjualan:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?= $row['tanggal_penjualan']; ?>"><br><br>
        <label for="nama">Nama Produk:</label>
        <input type="text" id="nama" name="nama" value="<?= $row['nama_produk']; ?>"><br><br> 
        <label for="harga">Harga Produk:</label>
        <input type="number" id="harga" name="harga" value="<?= $row['harga']; ?>"><br><br>
        <label for="jumlah">Jumlah Terjual:</label>
        <input type="number" id="jumlah" name="jumlah" value="<?= $row['jumlah_terjual']; ?>"><br><br>
        <label for="total">Total Penjualan:</label>
        <input type="number" id="total" name="total" value="<?= $row['total_penjualan']; ?>"><br><br>
        <button type="submit">Simpan</button>
    </form>
    </div>
    <center>
</body>
</html>