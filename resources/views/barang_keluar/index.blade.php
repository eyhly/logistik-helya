@extends('layouts.app')

@section('title', 'Barang Keluar')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Barang Keluar</h1>
    <a href="{{ route('barang-keluar.create') }}" class="btn btn-primary mb-3">Tambah Barang Keluar</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>No Barang</th>
                <th>Kode Barang</th>
                <th>Quantity</th>
                <th>Tujuan Barang</th>
                <th>Tanggal Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangKeluars as $barangKeluar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barangKeluar->no_barang }}</td>
                <td>{{ $barangKeluar->kode_barang }}</td>
                <td>{{ $barangKeluar->quantity }}</td>
                <td>{{ $barangKeluar->destination }}</td>
                <td>{{ $barangKeluar->tanggal_keluar }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
