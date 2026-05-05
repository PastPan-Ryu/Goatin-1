<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('role', 'user')->count();
        $totalSales = DB::table('laporan_keuangans')
                        ->where('jenis_transaksi', 'Pemasukan')
                        ->sum('jumlah');

        // Can add more metrics if needed
        $pendingOrders = 142; // Example static
        
        return view('admin.dashboard', compact('totalUsers', 'totalSales', 'pendingOrders'));
    }
}
