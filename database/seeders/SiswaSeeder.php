<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
    ['nama' => 'Andi', 'kelas_id' => 1],
    ['nama' => 'Budi', 'kelas_id' => 1],
    ['nama' => 'Citra', 'kelas_id' => 2]
]);
    }
}
