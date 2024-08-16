<?php
include 'koneksi.php';
//menangkap data id yang di kirim dari url
$id_laporan = $_GET['id_laporan'];
//hapus data
mysqli_query($koneksi, "DELETE FROM laporan_harian WHERE id_laporan='$id_laporan'");
//kembali ke halaman laporan_harian.php
header("location: laporan_harian.php");
?>