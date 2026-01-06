<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama_guru'];

    public function mataPelajaran()
    {
        return $this->hasMany(MataPelajaran::class);
    }
}
