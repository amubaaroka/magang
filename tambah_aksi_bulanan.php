<?php
//koneksi database
include 'koneksi.php';

//mengirim data yang di kirim dari form
$name = $_POST['name'];
$bulan_laporan = $_POST['bulan_laporan'];
$id_perangkat = $_POST['id_perangkat'];
$ringkasan = $_POST['ringkasan'];


//input data ke database
    $query = "
    INSERT INTO laporan_bulanan 
    (name, bulan_laporan, id_perangkat, ringkasan) 
    values('$name', '$bulan_laporan', '$id_perangkat', '$ringkasan')";

    if (mysqli_query($koneksi, $query)) {
        $query_update = "
        UPDATE jadwal_maintenance
        SET status = 'selesai'
        WHERE name = '$name'";


        if (mysqli_query($koneksi, $query_update)) {
            header("Location: laporan_bulanan.php?pesan=berhasil");
            exit();
        } else {
            echo "Error pada update status: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
    
    
    
//mengallihkan kembali ke laporan_bulanan.php
header("location:laporan_bulanan.php");

?>