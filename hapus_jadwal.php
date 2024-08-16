<?php
include 'koneksi.php';
//menangkap data id yang di kirim dari url
$id_maintenance = $_GET['id_maintenance'];
//hapus data
mysqli_query($koneksi, "delete FROM jadwal_maintenance WHERE id_maintenance='$id_maintenance'");
//kembali ke halaman jadwal.php
header("location: jadwal.php");
?>