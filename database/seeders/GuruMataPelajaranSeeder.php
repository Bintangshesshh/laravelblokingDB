<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruMataPelajaranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gurus')->insert([
            ['nama_guru' => 'Pak Ahmad'],
            ['nama_guru' => 'Bu Siti'],
        ]);

        DB::table('mata_pelajarans')->insert([
            ['nama_mapel' => 'Matematika', 'guru_id' => 1],
            ['nama_mapel' => 'Fisika', 'guru_id' => 1],
            ['nama_mapel' => 'Bahasa Indonesia', 'guru_id' => 2],
        ]);
    }
}
