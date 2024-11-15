{{-- @extends('layouts.app')

@section('title', 'Tambah Log Inventaris')

@section('content')
    <h1>Tambah Log Inventaris</h1>
    @include('partials.errors')

    <form action="{{ route('inventory-logs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Produk</label>
            <select class="form-control" id="product_id" name="product_id" required>
                <option value="">Pilih Produk</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection --}}

@extends('layouts.app') <!-- Pastikan ini sesuai dengan nama file layout utama -->

@section('content')
<div class="container">
    <h2>Tambah Log Inventaris</h2>
    <form action="{{ route('inventory-logs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipe</label>
            <select name="type" id="type" class="form-control" required>
                <option value="restock">Restock</option>
                <option value="sold">Sold</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Kuantitas</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
