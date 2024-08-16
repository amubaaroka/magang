<?php
//koneksi database
include 'koneksi.php';

//mengirim data yang di kirim dari form
$id_maintenance = $_POST['id_maintenance'];
$name = $_POST['name'];
$id_perangkat = $_POST['id_perangkat'];
$tanggal_maintenance = $_POST['tanggal_maintenance'];
$jenis_maintenance = $_POST['jenis_maintenance'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];

//input data ke database
mysqli_query($koneksi,"
    INSERT INTO jadwal_maintenance 
    (id_maintenance, name, id_perangkat, tanggal_maintenance, jenis_maintenance, deskripsi, status) 
    values('$id_maintenance','$name', '$id_perangkat', '$tanggal_maintenance','$jenis_maintenance','$deskripsi','$status')");

    if (mysqli_query($koneksi, $query)) {
        header("Location: jadwal.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
//mengallihkan kembali ke jadwal.php
header("location:jadwal.php");

?>