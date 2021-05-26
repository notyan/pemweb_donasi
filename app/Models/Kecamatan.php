<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'Kecamatan';

    public function id_kab(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'id_kab');
    }
    
}
