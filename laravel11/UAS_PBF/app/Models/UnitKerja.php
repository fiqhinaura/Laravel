<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'tb_unitkerja';
    protected $primaryKey = 'kd_unit';
    public $timestamps = false; // Jika tidak memerlukan kolom timestamps

    protected $fillable = ['kd_unit', 'nama_unit'];

    public function kelas()
    {
        return $this->hasMany(Penerimaan::class, 'kd_unit', 'kd_unit');
//  'id_kelas' (foreign_key): Nama kolom pada tabel tbl_siswa yang menyimpan nilai kunci asing yang berhubungan dengan tabel tbl_kelas.
// 'id_kelas' (other_key): Nama kolom pada tabel tbl_kelas yang menjadi kunci utama yang akan dicocokkan dengan kunci asing di tabel tbl_siswa.
    }
}
