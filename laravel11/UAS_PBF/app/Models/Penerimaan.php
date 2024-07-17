<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'trx_penerimaan';
    protected $primaryKey = 'kd_penerimaan';
    public $timestamps = false; // Jika tidak menggunakan kolom timestamp
    protected $fillable = ['kd_penerimaan', 'kd_penerima', 'tgl_penerimaan', 'kd_unit', 'tgl_return'];
    public function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'kd_unit', 'kd_unit');
    }
}
