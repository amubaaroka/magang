<?php
        include 'koneksi.php';
        if (isset($_GET['id_perangkat'])){
            $id_perangkat = $_GET['id_perangkat'];

            $result = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_perangkat='$id_perangkat'");
            if (!$result){
                die("Query gagal: " . mysqli_error($koneksi));
            }
            if ($row = mysqli_fetch_array($result)){
                $nama_perangkat = $row['nama_perangkat'];
                $jenis_perangkat = $row['jenis_perangkat'];
                $nomor_seri = $row['nomor_seri'];
                $lokasi = $row['lokasi'];
                $tanggal_pembelian = $row['tanggal_pembelian'];
                $stok = $row['stok'];
                $status = $row['status'];
                $tanggal_pemeliharaan_terakhir = $row['tanggal_pemeliharaan_terakhir'];
            } else {
                echo "Data tidak ditemukan";
                exit;
            }
        } else {
            echo "ID tidak ditemukan";
            exit;
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="template/dist/styles.css">
    <link rel="stylesheet" href="template/dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <title>Monitoring Perangkat IT</title>
</head>
        <?php

use LDAP\Result;

        session_start();
        if ($_SESSION['level'] == ""){
            header("location:index.php?pesan=gagal");
        }
        ?>
        
    <body>
        
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Monitoring Perangkat IT</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"> <?php echo $_SESSION['username'];?></a>
                </div>
            </div>
        </header>
        <!--/Header-->
        <div class="flex flex-1">
        <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="halaman_admin.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="jadwal.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            Jadwal Maintenance
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="barang.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-uikit float-left mx-2"></i>
                            Barang
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="pengeluaran.php"
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
                            <i class="fab fa-uikit float-left mx-2"></i>
                            Pengeluaran
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="laporan_harian.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Laporan harian
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="laporan_bulanan.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Laporan bulanan
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="logout.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class=""></i>
                            Logout
                            <span><i class=""></i></span>
                        </a>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">
                <div class="flex flex-col">
                    <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">Form Edit Barang</h2>
                        <form method="post" action="update_barang.php">
                            <input type="hidden" name="id_perangkat" value="<?php echo $id_perangkat; ?>">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_perangkat">
                                    Nama Perangkat
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_perangkat" type="text" name="nama_perangkat" value="<?php echo $nama_perangkat; ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis_perangkat">
                                    Jenis Perangkat
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jenis_perangkat" type="text" name="jenis_perangkat" value="<?php echo $jenis_perangkat; ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nomor_seri">
                                    Nomor Seri
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nomor_seri" type="text" name="nomor_seri" value="<?php echo $nomor_seri; ?>">
                            </div>
                            <div>
                            <label for="lokasi" class="block text-sm font medium text-gray-700">Lokasi</label>
                                <select id="lokasi" name="lokasi" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?php echo $lokasi; ?>">
                                    <option value="">Pilih Lokasi</option>
                                    <option value="server">Server</option>
                                    <option value="102">102</option>
                                    <option value="103">103</option>
                                    <option value="113">113</option>
                                    <option value="114">114</option>
                                    <option value="201">201</option>
                                    <option value="202">202</option>
                                    <option value="203">203</option>
                                    <option value="204">204</option>
                                    <option value="205">205</option>
                                    <option value="206">206</option>
                                    <option value="207">207</option>
                                    <option value="208">208</option>
                                    <option value="compound">Compound</option>
                                    <option value="B2">B2</option>
                                    <option value="B4">B4</option>
                                    <option value="E2">E2</option>
                                    <option value="E4">E4</option>
                                    <option value="timbangan">Timbangan</option>
                                    <option value="SCF">SCF</option>
                                    <option value="compact">Compact</option>
                                    <option value="BBF">BBF</option>
                                    <option value="HSK">HSK</option>
                                    <option value="pos_1">Pos 1</option>
                                    <option value="pos_2">Pos 2</option>
                                </select>
                        </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_pembelian">
                                    Tanggal Pembelian
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggal_pembelian" type="date" name="tanggal_pembelian" value="<?php echo $tanggal_pembelian; ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="stok">
                                    Stok
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stok" type="text" name="stok" value="<?php echo $stok; ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                                    Status
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status" type="text" name="status" value="<?php echo $status; ?>">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_pemeliharaan_terakhir">
                                    Tanggal Pemeliharaan Terakhir
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggal_pemeliharaan_terakhir" type="date" name="tanggal_pemeliharaan_terakhir" value="<?php echo $tanggal_pemeliharaan_terakhir; ?>">
                            </div>
                            <div class="flex items-center justify-between">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Update">
                                    Update
                                </button>
                                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="barang.php">
                                    Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <!--/main-->
            </div>
            <!--Footer-->
            <footer class="bg-grey-darkest text-white p-2">
                    <div class="flex flex-1 mx-auto">est. &copy;2024</div>
            </footer>
            <!--/footer-->
    </div>

</div>
<script src="template/main.js"></script>
<script src="template/main.js"></script>
<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#lokasi').select2({
            placeholder: "Pilih Lokasi",
            allowClear: true
        });
    });
</script>
<script type="text/javascript">	
	$(document).ready(function() {
		$('#lokasi').select2();
	});
</script>
</body>
</html>