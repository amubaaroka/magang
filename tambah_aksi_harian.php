<?php
//koneksi database
include 'koneksi.php';

//mengirim data yang di kirim dari form
$id_laporan = $_POST['id_laporan'];
$tanggal_laporan = $_POST['tanggal_laporan'];
$id_perangkat = $_POST['id_perangkat'];
$status = $_POST['status'];
$masalah_dilaporkan = $_POST['masalah_dilaporkan'];
$catatan = $_POST['catatan'];

//input data ke database
mysqli_query($koneksi,"
    INSERT INTO laporan_harian 
    (id_laporan, tanggal_laporan, id_perangkat, status, masalah_dilaporkan, catatan) 
    values('$id_laporan', '$tanggal_laporan', '$id_perangkat', '$status', '$masalah_dilaporkan','$catatan')");

    if (mysqli_query($koneksi, $query)) {
        header("Location: laporan_harian.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
//mengallihkan kembali ke laporan_harian.php
header("location:laporan_harian.php");

?>