<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function maintenance()
    {
        return view('maintenance');
    }

    public function barang()
    {
        return view('barang');
    }

    public function laporanHarian()
    {
        return view('laporan-harian');
    }

    public function laporanBulanan()
    {
        return view('laporan-bulanan');
    }
}
