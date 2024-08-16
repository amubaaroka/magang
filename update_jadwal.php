<?php
include 'koneksi.php';
$id_maintenance = $_POST['id_maintenance'];
$name = $_POST['name'];
$id_perangkat = $_POST['id_perangkat'];
$tanggal_maintenance = $_POST['tanggal_maintenance'];
$jenis_maintenance = $_POST['jenis_maintenance'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];

$query = "UPDATE jadwal_maintenance SET
          name='$name',
          id_perangkat='$id_perangkat',
          tanggal_maintenance='$tanggal_maintenance',
          jenis_maintenance='$jenis_maintenance',
          deskripsi='$deskripsi',
          status='$status'
          WHERE id_maintenance='$id_maintenance'";

if (mysqli_query($koneksi, $query)) {
    header("Location: jadwal.php");
} else {
    echo "Error update: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>