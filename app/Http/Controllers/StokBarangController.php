<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stokBarangs = StokBarang::all();
        return view('stok_barang.index', compact('stokBarangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($kode_barang)
    {
        $stok = StokBarang::where('kode_barang', $kode_barang)->first();

        if (!$stok) {
            return response()->json(['error' => 'Barang tidak ditemukan'], 400);
        }

        return response()->json($stok);
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
