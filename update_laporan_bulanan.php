<?php
include 'koneksi.php';

$id_laporan = $_POST['id_laporan'];
$name = $_POST['name'];
$bulan_laporan = $_POST['bulan_laporan'];
$id_perangkat = $_POST['id_perangkat'];
$ringkasan = $_POST['ringkasan'];

$query = "UPDATE laporan_bulanan SET
          name='$name',
          bulan_laporan='$bulan_laporan',
          id_perangkat='$id_perangkat',
          ringkasan='$ringkasan'
          WHERE id_laporan='$id_laporan'";

if (mysqli_query($koneksi, $query)) {
    header("Location: laporan_bulanan.php");
} else {
    echo "Error update: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>