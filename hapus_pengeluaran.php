<?php
include 'koneksi.php';
//menangkap data
$id_pengeluaran = $_GET['id_pengeluaran'];

$query = mysqli_query($koneksi, "SELECT id_perangkat, jumlah FROM pengeluaran WHERE id_pengeluaran='$id_pengeluaran'");
$data = mysqli_fetch_array($query);

if ($data) {
    $id_perangkat = $data['id_perangkat'];
    $jumlah = $data['jumlah'];

    $update_stok = mysqli_query($koneksi, "UPDATE barang SET stok = stok + $jumlah WHERE id_perangkat='$id_perangkat'");

    if ($update_stok) {
        $delete_pengeluaran = mysqli_query($koneksi, "DELETE FROM pengeluaran WHERE id_pengeluaran='$id_pengeluaran'");

        if ($delete_pengeluaran) {
            header("location:pengeluaran.php");
        } else {
            echo "Gagal menghapus data pengeluaran: " . mysqli_error($koneksi);
        }
    } else {
        echo "Gagal mengembalikan stok barang: " . mysqli_error($koneksi);
    }
} else {
    echo "Data pengeluaran tidak ditemukan";
}

header("location:pengeluaran.php");
?>