<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;
use App\Models\Inventaris;
use App\Models\PertumbuhanTernak;

class RekamMedisController extends Controller
{
    public function index(Request $request)
    {
        $rekamMedis = RekamMedis::with('inventaris')->orderBy('tanggal', 'desc')->get();
        $inventarisList = Inventaris::all();
        
        // Handle chart data for selected livestock
        $selectedInventarisId = $request->get('inventaris_id', $inventarisList->first()->id ?? null);
        $chartData = [];
        $chartLabels = [];
        
        if ($selectedInventarisId) {
            $pertumbuhan = PertumbuhanTernak::where('inventaris_id', $selectedInventarisId)
                                            ->orderBy('tanggal_pencatatan', 'asc')
                                            ->get();
            $chartLabels = $pertumbuhan->pluck('tanggal_pencatatan')->map(function($date) {
                return \Carbon\Carbon::parse($date)->format('d M Y');
            })->toArray();
            $chartData = $pertumbuhan->pluck('berat')->toArray();
        }

        return view('admin.rekam-medis.index', compact('rekamMedis', 'inventarisList', 'selectedInventarisId', 'chartLabels', 'chartData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'inventaris_id' => 'required|exists:inventaris,id',
            'tanggal' => 'required|date',
            'dokter_hewan' => 'nullable|string|max:255',
            'diagnosa' => 'required|string|max:255',
            'tindakan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        RekamMedis::create($request->all());

        return redirect()->route('admin.rekam-medis.index')->with('success', 'Rekam Medis berhasil ditambahkan.');
    }

    public function storeBerat(Request $request)
    {
        $request->validate([
            'inventaris_id' => 'required|exists:inventaris,id',
            'tanggal_pencatatan' => 'required|date',
            'berat' => 'required|numeric|min:0',
        ]);

        PertumbuhanTernak::create($request->all());
        
        // Update berat terbaru di tabel inventaris
        $inventaris = Inventaris::find($request->inventaris_id);
        $inventaris->update(['berat' => $request->berat]);

        return redirect()->route('admin.rekam-medis.index', ['inventaris_id' => $request->inventaris_id])
                         ->with('success', 'Data berat badan berhasil dicatat.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'dokter_hewan' => 'nullable|string|max:255',
            'diagnosa' => 'required|string|max:255',
            'tindakan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $rekam = RekamMedis::findOrFail($id);
        $rekam->update($request->except(['inventaris_id']));

        return redirect()->route('admin.rekam-medis.index')->with('success', 'Rekam Medis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        RekamMedis::findOrFail($id)->delete();
        return redirect()->route('admin.rekam-medis.index')->with('success', 'Rekam Medis berhasil dihapus.');
    }
}
