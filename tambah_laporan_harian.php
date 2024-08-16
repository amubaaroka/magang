<?php
include 'koneksi.php';
//query nilai ENUM dari kolom status
$query = "SHOW COLUMNS FROM laporan_harian LIKE 'status'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($result);
//mengambil bagian yang mengandung nilai ENUM
$enumList = explode(",", str_replace("'", "", substr($row['Type'], 5, (strlen($row['Type'])-6))));

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
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
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
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
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
            <!--Main-->
            <div class="flex-1 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Form Tambah Laporan Harian</h2>
                    <form method="post" action="tambah_aksi_harian.php" class="space-y-4">
                        <div>
                            <label for="tanggal_laporan" class="block text-sm font medium text-gray-700">Tanggal Laporan</label>
                            <input type="date" name="tanggal_laporan" id="tanggal_laporan" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="id_perangkat" class="block text-sm font medium text-gray-700">ID Perangkat</label>
                            <select name="id_perangkat" id="id_perangkat" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- Pilih Perangkat --</option>
                                <?php
                                include 'koneksi.php';
                                $result = mysqli_query($koneksi, "SELECT id_perangkat, nama_perangkat FROM barang");
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id_perangkat']}'>{$row['nama_perangkat']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-idnigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- Pilih Status --</option>
                                <?php
                                foreach($enumList as $value){
                                    echo "<option value='$value'>$value</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="masalah_dilaporkan" class="block text-sm font medium text-gray-700">Masalah Dilaporkan</label>
                            <textarea name="masalah_dilaporkan" id="masalah_dilaporkan" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label for="catatan" class="block text-sm font medium text-gray-700">Catatan</label>
                            <textarea name="catatan" id="catatan" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                        <div class="flex items-center justifiy-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                        </div>
                    </form>
                    <a href="laporan_harian.php" class="text-gray-600 hover:text-gray-800 text-sm">Kembali</a>
                </div>
            </div>
                
            <!--/Main-->

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