<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeder extends Seeder
{
    public function run(): void
    {
        DB::table('kelas')->insert([
        ['nama_kelas' => 'X PPLG 1'],
        ['nama_kelas' => 'X PPLG 2']
    ]);
    }
}
