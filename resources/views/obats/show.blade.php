@extends('layouts.app')

@section('content')
    <h1 class="h3">{{ $obat->nama_obat }}</h1>
    <p><strong>Deskripsi:</strong> {{ $obat->deskripsi }}</p>
    <p><strong>Harga:</strong> Rp {{ number_format($obat->harga, 2, ',', '.') }}</p>
    <p><strong>Stok:</strong> {{ $obat->stok }}</p>

    <a href="{{ route('obats.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('obats.edit', $obat->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('obats.destroy', $obat->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus obat ini?')">Hapus</button>
    </form>
@endsection
