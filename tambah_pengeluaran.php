<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "stok_tidak_cukup") {
        echo "
        <div class='fixed inset-0 flex items-center justify-center z-50'>
            <div class='bg-red-500 text-white p-4 rounded shadow-lg'>
                Stok tidak mencukupi!
            </div>
        </div>";
    } elseif ($_GET['pesan'] == "berhasil") {
        echo "
        <div class='fixed inset-0 flex items-center justify-center z-50'>
            <div class='bg-green-500 text-white p-4 rounded shadow-lg'>
                Pengeluaran berhasil ditambahkan.
            </div>
        </div>";
    }
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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro2400,200i,600,600i,700,700i" rel="stylesheet">
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
<div class="mx-auto bg-2rey-200">
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
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="halaman_admin.php"
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="jadwal.php"
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            Jadwal Maintenance
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="barang.php"
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
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
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Laporan harian
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="laporan_bulanan.php"
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Laporan bulanan
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="logout.php"
                           class="font-sans font-hairline hover:font-normal border border-gray-300 text-nav-item no-underline">
                            <i class=""></i>
                            Logout
                            <span><i class=""></i></span>
                        </a>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
                <div class="container mx-auto p-8">
                <h1 class="text-2xl font-bold mb-6">Tambah Pengeluaran</h1>
                    <form method="post" action="proses_tambah_pengeluaran.php" class="space-y-4">
                        <div class="mb-4">
                            <label for="id_perangkat" class="block text-gray-700 text-sm font-bold mb-2">Nama Perangkat</label>
                            <select name="id_perangkat" id="id_perangkat" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- Pilih Perangkat --</option>
                                <?php
                                include 'koneksi.php';
                                $barang = mysqli_query($koneksi, "SELECT * FROM barang");
                                while ($b = mysqli_fetch_array($barang)) {
                                    echo "<option value='".$b['id_perangkat']."'>".$b['nama_perangkat']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="jumlah" class="block text-gray-700 text-sm font-bold mb-2">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_pengeluaran" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Pengeluaran</label>
                            <input type="date" name="tanggal_pengeluaran" id="tanggal_pengeluaran" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah</button>
                    </form>
                    <a href="pengeluaran.php" class="text-gray-600 hover:text-gray-800 text-sm">Kembali</a>
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

<script>
    // Menghilangkan notifikasi setelah 3 detik
    setTimeout(function(){
        const alert = document.querySelector('.fixed.inset-0');
        if(alert){
            alert.style.transition = 'opacity 0.5s';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); // Hapus elemen setelah transisi
        }
    }, 3000);
</script>

</body>

</html>