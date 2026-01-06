<?php

use App\Http\Controllers\SklhController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/text', function () {
    return view('text');
});
Route::get('/profil', function () {
    return view('profil', [
        'nama' => 'Bintang',
        'kelas' => 'XI PPLG 1',
        'jurusan' => 'Pengembangan Perangkat Lunak dan Gim'
    ]);
});

Route::get('/guru-mata-pelajaran', [SklhController::class, 'guruMataPelajaran']);