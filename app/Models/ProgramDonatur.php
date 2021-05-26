<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDonatur extends Model
{
    use HasFactory;

    protected $table = "program_donatur";

    /**
     * Get the program that owns the ProgramDonatur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'id_program');
    }

    /**
     * Get the rekening that owns the ProgramDonatur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rekening(): BelongsTo
    {
        return $this->belongsTo(Rekening::class, 'id_rekening');
    }
}
