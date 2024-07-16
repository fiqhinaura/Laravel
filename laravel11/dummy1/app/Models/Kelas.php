<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tbl_kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = false; // Jika tidak menggunakan kolom timestamp
    protected $fillable = ['nama_kelas', 'tahun_ajaran'];
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_kelas', 'id_kelas');
    }
}
