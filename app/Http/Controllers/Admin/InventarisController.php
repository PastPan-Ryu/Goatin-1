<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use App\Models\Produk;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::orderBy('created_at', 'desc')->paginate(10);
        $totalLivestock = Inventaris::count();
        $lowStockAlerts = Inventaris::where('status_stok', 'Dalam Perawatan')->count(); // Or any other criteria
        
        return view('admin.inventaris.index', compact('inventaris', 'totalLivestock', 'lowStockAlerts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'ras' => 'nullable|string|max:255',
            'gender' => 'required|in:Jantan,Betina',
            'umur' => 'required|integer|min:0',
            'berat' => 'required|numeric|min:0',
            'rekam_medis_general' => 'nullable|string',
        ]);

        Inventaris::create($request->all());

        return redirect()->route('admin.inventaris.index')->with('success', 'Inventaris berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'ras' => 'nullable|string|max:255',
            'gender' => 'required|in:Jantan,Betina',
            'umur' => 'required|integer|min:0',
            'berat' => 'required|numeric|min:0',
            'rekam_medis_general' => 'nullable|string',
            'status_stok' => 'required|in:Tersedia,Dijual,Terjual,Dalam Perawatan',
        ]);

        $inventaris = Inventaris::findOrFail($id);
        $inventaris->update($request->all());

        return redirect()->route('admin.inventaris.index')->with('success', 'Inventaris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        $inventaris->delete();

        return redirect()->route('admin.inventaris.index')->with('success', 'Inventaris berhasil dihapus.');
    }

    public function jual(Request $request, $id)
    {
        $request->validate([
            'harga' => 'required|numeric|min:0',
            'spesifikasi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $inventaris = Inventaris::findOrFail($id);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('produk_fotos', 'public');
        }

        Produk::create([
            'inventaris_id' => $inventaris->id,
            'nama_produk' => $inventaris->jenis . ' ' . ($inventaris->ras ? $inventaris->ras : ''),
            'spesifikasi' => $request->spesifikasi,
            'harga' => $request->harga,
            'foto' => $fotoPath,
        ]);

        $inventaris->update(['status_stok' => 'Dijual']);

        return redirect()->route('admin.katalog.index')->with('success', 'Hewan berhasil dimasukkan ke katalog.');
    }
}
