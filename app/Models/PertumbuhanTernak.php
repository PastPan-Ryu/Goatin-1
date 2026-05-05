<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PertumbuhanTernak extends Model
{
    protected $fillable = [
        'inventaris_id',
        'tanggal_pencatatan',
        'berat',
    ];

    public function inventaris()
    {
        return $this->belongsTo(Inventaris::class);
    }
}
