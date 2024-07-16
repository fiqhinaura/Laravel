<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'tbl_kelas';

    // Jika tidak ada kolom timestamp (created_at dan updated_at)
    public $timestamps = false;

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['nama_kelas', 'tahun_ajaran'];

    // Tentukan primary key jika tidak menggunakan 'id'
    protected $primaryKey = 'id_kelas';
}
