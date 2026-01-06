<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;

class SklhController extends Controller
{
    public function data()
    {
        $kelas = Kelas::with('siswa')->get();
        return $kelas;
    }

    public function guruMataPelajaran()
    {
        $guru = Guru::with('mataPelajaran')->get();
        return $guru;
    }
}
