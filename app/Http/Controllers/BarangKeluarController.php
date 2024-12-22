<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangKeluars = BarangKeluar::all();
        return view('barang_keluar.index', compact('barangKeluars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang_keluar.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_barang' => 'required|string',
            'kode_barang' => 'required|string',
            'quantity' => 'required|integer',
            'destination' => 'required|string',
            'tanggal_keluar' => 'required|date',
        ]);

        $stok = StokBarang::where('kode_barang', $request->kode_barang)->first();
        if (!$stok || $stok->stok < $request->quantity) {
            return back()->withErrors(['quantity' => 'Stok tidak mencukupi']);
        }

        BarangKeluar::create($request->all());

        $stok->decrement('stok', $request->quantity);

        return redirect()->route('barang-keluar.index')->with('success', 'Barang keluar berhasil dicatat.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
