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
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
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
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
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
            <!--Main-->
            
            <div class="p-2">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs" href="tambah_jadwal.php">+ Tambah Jadwal</a>
                <div class="mt-2">
                    <table class="min-w-full bg-white border border-gray-300 text-xs">
                        <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/12 py-2 px-2 uppercase font-semibold border border-gray-300">id_maintenance</th>
                            <th class="w-2/12 py-2 px-2 uppercase font-semibold border border-gray-300">name</th>
                            <th class="w-2/12 py-2 px-2 uppercase font-semibold border border-gray-300">Nama perangkat</th>
                            <th class="w-2/12 py-2 px-2 uppercase font-semibold border border-gray-300">Lokasi</th>
                            <th class="w-2/12 py-2 px-2 uppercase font-semibold border border-gray-300">tanggal_maintenance</th>
                            <th class="w-2/12 py-2 px-2 uppercase font-semibold border border-gray-300">jenis_maintenance</th>
                            <th class="w-2/12 py-2 px-2 uppercase font-semibold border border-gray-300">deskripsi</th>
                            <th class="w-1/12 py-2 px-2 uppercase font-semibold border border-gray-300">status</th>
                            <th class="w-1/12 py-2 px-2 uppercase font-semibold border border-gray-300">OPSI</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-700">
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "
                        SELECT jm.*, b.nama_perangkat, b.lokasi
                        FROM jadwal_maintenance jm
                        JOIN barang b ON jm.id_perangkat = b.id_perangkat
                    ");
                    while ($d = mysqli_fetch_array($data)){
                    ?>
                        <tr>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $no++; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['name']; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['nama_perangkat']; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['lokasi']; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['tanggal_maintenance']; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['jenis_maintenance']; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['deskripsi']; ?></td>
                            <td class="py-2 px-2 border border-gray-300"><?php echo $d['status']; ?></td>
                            <td class="py-2 px-2 border border-gray-300">
                                <a href="edit_jadwal.php?id_maintenance=<?php echo $d['id_maintenance']; ?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <a href="hapus_jadwal.php?id_maintenance=<?php echo $d['id_maintenance']; ?>" class="text-red-500 hover:text-red-700 ml-1">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                        </tbody>
                    </table>
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
</body>

</html>