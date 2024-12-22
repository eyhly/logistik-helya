@extends('layouts.app')

@section('title', 'Tambah Barang Keluar')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Barang Keluar</h1>

    <form action="{{ route('barang-keluar.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="no_barang" class="form-label">No Barang</label>
            <input type="text" class="form-control" id="no_barang" name="no_barang" required>
        </div>
        <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="mb-3">
            <label for="destination" class="form-label">Tujuan Barang</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
