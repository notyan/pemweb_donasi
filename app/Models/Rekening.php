<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $table = 'Rekening';

    public function id_vendor(): BelongsTo
    {
        return $this->belongsTo(ref_vendor_saving::class, 'id_vendor');
    }
}
