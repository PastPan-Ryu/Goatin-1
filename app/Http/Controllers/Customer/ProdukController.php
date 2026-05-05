<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::with('inventaris')->orderBy('created_at', 'desc')->paginate(12);
        return view('customer.produk', compact('produks'));
    }
}
