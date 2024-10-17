<?php

use App\Http\Controllers\UserController; //import this
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
Route::get('/', function () {
    return view('home');
});

Route::get('/users',[UserController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadAddUserForm']);

Route::post('/add/user',[UserController::class,'AddUser'])->name('AddUser');

Route::get('/edit/{id}',[UserController::class,'loadEditForm']);
Route::get('/delete/{id}',[UserController::class,'deleteUser']);

Route::post('/edit/user',[UserController::class,'EditUser'])->name('EditUser');


// Route untuk menampilkan semua obat (index)
Route::get('obats', [ObatController::class, 'index'])->name('obats.index');

// Route untuk menampilkan form tambah obat (create)
Route::get('obats/create', [ObatController::class, 'create'])->name('obats.create');

// Route untuk menyimpan data obat baru (store)
Route::post('obats', [ObatController::class, 'store'])->name('obats.store');

// Route untuk menampilkan detail obat (show)
Route::get('obats/{obat}', [ObatController::class, 'show'])->name('obats.show');

// Route untuk menampilkan form edit obat (edit)
Route::get('obats/{obat}/edit', [ObatController::class, 'edit'])->name('obats.edit');

// Route untuk memperbarui data obat (update)
Route::put('obats/{obat}', [ObatController::class, 'update'])->name('obats.update');

// Route untuk menghapus obat (destroy)
Route::delete('obats/{obat}', [ObatController::class, 'destroy'])->name('obats.destroy');
