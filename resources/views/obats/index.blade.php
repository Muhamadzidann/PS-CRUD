@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Daftar Obat</h1>
        <a href="{{ route('obats.create') }}" class="btn btn-primary">Tambah Obat</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($obats as $obat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>Rp {{ number_format($obat->harga, 2, ',', '.') }}</td>
                    <td>{{ $obat->stok }}</td>
                    <td>
                        <a href="{{ route('obats.show', $obat->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('obats.edit', $obat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('obats.destroy', $obat->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus obat ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada obat yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
