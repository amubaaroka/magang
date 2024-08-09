<?php
include 'koneksi.php';
//menangkap data id yang di kirim dari url
$id_perangkat = $_GET['id_perangkat'];
//hapus data
mysqli_query($koneksi, "delete FROM barang WHERE id_perangkat='$id_perangkat'");
//kembali ke halaman barang.php
header("location:barang.php");
?>