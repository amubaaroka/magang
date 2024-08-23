<?php
//koneksi database
include 'koneksi.php';

//mengirim data yang di kirim dari form
$id_perangkat = $_POST['id_perangkat'];
$nama_perangkat = $_POST['nama_perangkat'];
$jenis_perangkat = $_POST['jenis_perangkat'];
$nomor_seri = $_POST['nomor_seri'];
$lokasi = $_POST['lokasi'];
$tanggal_pembelian = $_POST['tanggal_pembelian'];
$stok = $_POST['stok'];
$status = $_POST['status'];
$tanggal_pemeliharaan_terakhir = $_POST['tanggal_pemeliharaan_terakhir'];

//input data ke database
mysqli_query($koneksi,"insert into barang values(
            '$id_perangkat',
            '$nama_perangkat',
            '$jenis_perangkat',
            '$nomor_seri',
            '$lokasi',
            '$tanggal_pembelian',
            '$stok',
            '$status',
            '$tanggal_pemeliharaan_terakhir')
            ");

//mengallihkan kembali ke barang.php
header("location:barang.php");

?>