@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<div class="container">
    <h1 class="mb-4">Detail Stok Barang</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kode Barang: {{ $stokBarang->kode_barang }}</h5>
            <p class="card-text">Stok Tersedia: {{ $stokBarang->stok }}</p>
            <a href="{{ route('stok-barang.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
