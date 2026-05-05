<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekam_medis';

    protected $fillable = [
        'inventaris_id',
        'tanggal',
        'dokter_hewan',
        'diagnosa',
        'tindakan',
        'status',
    ];

    public function inventaris()
    {
        return $this->belongsTo(Inventaris::class);
    }
}
