<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangMasuks = BarangMasuk::all();
        return view('barang_masuk.index', compact('barangMasuks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang_masuk.add');
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
            'origin' => 'required|string',
            'tanggal_masuk' => 'required|date',
        ]);
    
        BarangMasuk::create($request->all());

        StokBarang::updateOrCreate(
            ['kode_barang' => $request->kode_barang],
            ['stok' => \DB::raw('stok + ' . $request->quantity)]
        );

        return redirect()->route('barang-masuk.index')->with('success', 'Barang masuk berhasil dicatat.');
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
