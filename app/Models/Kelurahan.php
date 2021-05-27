<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = 'Kelurahan';

    public function id_kec(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
        
    }
}
