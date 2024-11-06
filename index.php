<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
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
    <h2>Data Laporan Penjualan</h2>
    <div class="container">
    <form method="POST" action="proses-tambah.php">
        <h3>Input Data</h3>
        <label for="tanggal">Tanggal Penjualan  :</label>
        <input type="date" id="tanggal" name="tanggal"><br><br>
        <label for="nama">Nama Produk   :</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="harga">Harga Produk :</label>
        <input type="number" id="harga" name="harga"><br><br>
        <label for="jumlah">Jumlah Terjual  :</label>
        <input type="number" id="jumlah" name="jumlah"><br><br>
        <button type="submit">Tambah</button>
    </div>  
    </form>
    </center>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Penjualan</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total Penjualan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $query = "SELECT * FROM penjualan";
        $result = $mysqli-> query($query);
        while($row = $result->fetch_assoc()){
            $id = $row['id'];
        ?>
            <tr>
                <td><?= $id;?></td>
                <td><?= $row['tanggal_penjualan'];?></td>
                <td><?= $row['nama_produk'];?></td>
                <td><?= $row['harga'];?></td>
                <td><?= $row['jumlah_terjual'];?></td>
                <td><?= $row['total_penjualan'];?></td>
                <td>
                    <form action="edit.php" method="GET" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <button type="submit" style="background-color: #34495e; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Edit</button>
                    </form>
                    <form action="hapus.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;" onclick="return confirm('Yakin mau menghapus data ini? kalo bisa di pikir-pikir dulu yaa')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
