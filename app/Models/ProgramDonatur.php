<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDonatur extends Model
{
    use HasFactory;

    /**
     * Get the id_program that owns the ProgramDonatur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_program(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'id_program');
    }

    /**
     * Get the id_rekening that owns the ProgramDonatur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_rekening(): BelongsTo
    {
        return $this->belongsTo(Rekening::class, 'id_rekening');
    }
}
