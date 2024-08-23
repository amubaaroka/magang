<?php
include 'koneksi.php';
//menangkap data id yang di kirim dari url
$id_laporan = $_GET['id_laporan'];
//hapus data
mysqli_query($koneksi, "DELETE FROM laporan_bulanan WHERE id_laporan='$id_laporan'");
//kembali ke halaman laporan_bulanan.php
header("location: laporan_bulanan.php");
?>