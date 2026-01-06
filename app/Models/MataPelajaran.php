<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $fillable = ['nama_mapel', 'guru_id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
