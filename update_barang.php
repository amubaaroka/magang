<?php
include 'koneksi.php';
if (isset($_POST['id_perangkat'])){
    $id_perangkat = $_POST['id_perangkat'];
    $nama_perangkat = $_POST['nama_perangkat'];
    $jenis_perangkat = $_POST['jenis_perangkat'];
    $nomor_seri = $_POST['nomor_seri'];
    $lokasi = $_POST['lokasi'];
    $tanggal_pembelian = $_POST['tanggal_pembelian'];
    $status = $_POST['status'];
    $tanggal_pemeliharaan_terakhir = $_POST['tanggal_pemeliharaan_terakhir'];

    $query = "UPDATE barang SET
                nama_perangkat='$nama_perangkat',
                jenis_perangkat='$jenis_perangkat',
                nomor_seri='$nomor_seri',
                lokasi='$lokasi',
                tanggal_pembelian='$tanggal_pembelian',
                status='$status',
                tanggal_pemeliharaan_terakhir='$tanggal_pemeliharaan_terakhir'
              WHERE id_perangkat='$id_perangkat'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data Berhasil diperbarui";
        header("Location: barang.php");
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID perangkat tidak ditemukan";
}
?>