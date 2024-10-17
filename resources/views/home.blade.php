@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        <h1 class="mb-4">Sistem Manajemen</h1>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Obat</h5>
                        <p class="card-text">Kelola data obat seperti penambahan, pengeditan, dan penghapusan data obat.</p>
                        <a href="{{ route('obats.index') }}" class="btn btn-primary">Kelola Obat</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen User</h5>
                        <p class="card-text">Kelola data user seperti penambahan, pengeditan, dan penghapusan data user.</p>
                        <a href="/users" class="btn btn-primary">Kelola User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
