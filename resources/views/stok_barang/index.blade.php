@extends('layouts.app')

@section('title', 'Stok Barang')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Stok Barang</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stokBarangs as $stokBarang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stokBarang->kode_barang }}</td>
                <td>{{ $stokBarang->stok }}</td>
                <td>
                    <a href="{{ route('stok-barang.detail', $stokBarang->id) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
