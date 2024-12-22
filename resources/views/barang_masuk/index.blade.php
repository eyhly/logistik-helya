@extends('layouts.app')

@section('title', 'Barang Masuk')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Barang Masuk</h1>
    <a href="{{ route('barang-masuk.create') }}" class="btn btn-primary mb-3">Tambah Barang Masuk</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>No Barang</th>
                <th>Kode Barang</th>
                <th>Quantity</th>
                <th>Asal Barang</th>
                <th>Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangMasuks as $barangMasuk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barangMasuk->no_barang }}</td>
                <td>{{ $barangMasuk->kode_barang }}</td>
                <td>{{ $barangMasuk->quantity }}</td>
                <td>{{ $barangMasuk->origin }}</td>
                <td>{{ $barangMasuk->tanggal_masuk }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
