{{-- @extends('layouts.app')

@section('title', 'Log Inventaris')

@section('content')
    <h1>Log Inventaris</h1>
    <a href="{{ route('inventory-logs.create') }}" class="btn btn-primary mb-3">Tambah Log</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->product->name }}</td>
                    <td>{{ $log->quantity }}</td>
                    <td>{{ $log->date }}</td>
                    <td>
                        <form action="{{ route('inventory-logs.destroy', $log->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus log ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection --}}

@extends('layouts.app') <!-- Pastikan ini sesuai dengan nama file layout utama -->

@section('content')
<div class="container">
    <h2>Log Inventaris</h2>
    <a href="{{ route('inventory-logs.create') }}" class="btn btn-success mb-3">Tambah Log</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Tipe</th>
                <th>Kuantitas</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->product->name }}</td>
                <td>{{ ucfirst($log->type) }}</td>
                <td>{{ $log->quantity }}</td>
                <td>{{ $log->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
