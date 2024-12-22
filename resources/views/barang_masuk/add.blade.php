@extends('layouts.app')

@section('title', 'Tambah Barang Masuk')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Barang Masuk</h1>

    <form action="{{ route('barang-masuk.store') }}" method="POST">
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
            <label for="origin" class="form-label">Asal Barang</label>
            <input type="text" class="form-control" id="origin" name="origin" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
