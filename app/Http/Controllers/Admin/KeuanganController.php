<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanKeuangan;

class KeuanganController extends Controller
{
    public function index()
    {
        $laporans = LaporanKeuangan::orderBy('tanggal', 'desc')->paginate(15);
        
        $totalRevenue = LaporanKeuangan::where('jenis_transaksi', 'Pemasukan')->sum('jumlah');
        $totalExpenses = LaporanKeuangan::where('jenis_transaksi', 'Pengeluaran')->sum('jumlah');
        $netProfit = $totalRevenue - $totalExpenses;

        return view('admin.keuangan.index', compact('laporans', 'totalRevenue', 'totalExpenses', 'netProfit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenis_transaksi' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric|min:0',
            'keterangan' => 'required|string|max:255',
        ]);

        LaporanKeuangan::create($request->all());

        return redirect()->route('admin.keuangan.index')->with('success', 'Laporan Keuangan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenis_transaksi' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric|min:0',
            'keterangan' => 'required|string|max:255',
        ]);

        $laporan = LaporanKeuangan::findOrFail($id);
        $laporan->update($request->all());

        return redirect()->route('admin.keuangan.index')->with('success', 'Laporan Keuangan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $laporan = LaporanKeuangan::findOrFail($id);
        $laporan->delete();

        return redirect()->route('admin.keuangan.index')->with('success', 'Laporan Keuangan berhasil dihapus.');
    }
}
