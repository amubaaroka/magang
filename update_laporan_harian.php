<?php
include 'koneksi.php';
$id_laporan = $_POST['id_laporan'];
$id_perangkat = $_POST['id_perangkat'];
$status = $_POST['status'];
$tanggal_laporan = $_POST['tanggal_laporan'];
$masalah_dilaporkan = $_POST['masalah_dilaporkan'];
$catatan = $_POST['catatan'];

$query = "UPDATE laporan_harian SET
          id_perangkat='$id_perangkat',
          status='$status',
          tanggal_laporan='$tanggal_laporan',
          masalah_dilaporkan='$masalah_dilaporkan',
          catatan='$catatan'
          WHERE id_laporan='$id_laporan'";

if (mysqli_query($koneksi, $query)) {
    header("Location: laporan_harian.php");
} else {
    echo "Error update: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>