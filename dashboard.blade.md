<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="sidebar">
        <h2>Maintenance Perangkat IT</h2>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('maintenance') }}">Jadwal Maintenance</a></li>
            <li><a href="{{ route('barang') }}">Barang</a></li>
            <li><a href="{{ route('laporan-harian') }}">Laporan Harian</a></li>
            <li><a href="{{ route('laporan-bulanan') }}">Laporan Bulanan</a></li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    <div class="main-content">
        <header>
            <h1>Welcome, {{ Auth::user()->username }}!</h1>
        </header>
        <div class="content">
            <h2>Dashboard</h2>
            <!-- Add your dashboard content here -->
        </div>
    </div>
</body>
</html>
