<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['kode_jur', 'nama_jur'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
