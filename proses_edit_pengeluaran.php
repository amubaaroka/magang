<?php
include 'koneksi.php';

$id_pengeluaran = $_POST['id_pengeluaran'];
$id_perangkat_baru = $_POST['id_perangkat'];
$jumlah_baru = $_POST['jumlah'];
$tanggal_pengeluaran = $_POST['tanggal_pengeluaran'];

$query = mysqli_query($koneksi, "SELECT id_perangkat, jumlah FROM pengeluaran WHERE id_pengeluaran='$id_pengeluaran'");
$data_lama = mysqli_fetch_array($query);

$id_perangkat_lama = $data_lama['id_perangkat'];
$jumlah_lama = $data_lama['jumlah'];

mysqli_query($koneksi, "
        UPDATE barang
        SET stok = stok + $jumlah_lama
        WHERE id_perangkat = '$id_perangkat_lama'
");

mysqli_query($koneksi, "
        UPDATE barang
        SET stok = stok - $jumlah_baru
        WHERE id_perangkat = '$id_perangkat_baru'
");

mysqli_query($koneksi, "
            UPDATE pengeluaran
            SET id_perangkat='$id_perangkat_baru', jumlah='$jumlah_baru', tanggal_pengeluaran='$tanggal_pengeluaran'
            WHERE id_pengeluaran='$id_pengeluaran'");

header("location:pengeluaran.php");
?>