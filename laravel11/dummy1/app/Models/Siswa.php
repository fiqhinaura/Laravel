<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tbl_siswa';
    protected $primaryKey = 'id_siswa';
    public $timestamps = false; // Jika tidak memerlukan kolom timestamps

    protected $fillable = ['id_kelas', 'nis', 'nama_siswa'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}
