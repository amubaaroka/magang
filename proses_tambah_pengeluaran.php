<?php
include 'koneksi.php';

$id_pengeluaran = $_POST['id_pengeluaran'];
$id_perangkat = $_POST['id_perangkat'];
$jumlah = $_POST['jumlah'];
$tanggal_pengeluaran = $_POST['tanggal_pengeluaran'];
//ambil data stok
$query = mysqli_query($koneksi, "SELECT stok FROM barang WHERE id_perangkat = '$id_perangkat'");
$data = mysqli_fetch_array($query);

$stok_sekarang = $data['stok'];
    //pastikan stok mencukupi
    if ($jumlah > $stok_sekarang) {
        header("Location: tambah_pengeluaran.php?pesan=stok_tidak_cukup");
        exit();
    } else {
    //kurangi stok
        $stok_baru = $stok_sekarang - $jumlah;
    //update stok barang
        mysqli_query($koneksi, "
                UPDATE barang SET stok = '$stok_baru'
                WHERE id_perangkat = '$id_perangkat'");
    //insert data ke tabel pengeluaran
        mysqli_query($koneksi, "
                INSERT INTO pengeluaran (id_pengeluaran, id_perangkat, jumlah, tanggal_pengeluaran)
                VALUES ('$id_pengeluaran', '$id_perangkat', '$jumlah', '$tanggal_pengeluaran')");
        
        header("Location: pengeluaran.php?pesan=berhasil");
        exit();
    }


header("location:pengeluaran.php");
?>