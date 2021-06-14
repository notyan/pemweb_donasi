<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKomplain extends Model
{
    use HasFactory;
    protected $table = 'program_komplain';
    /**
     * Get the id_program that owns the ProgramDonatur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_program(): BelongsTo{
        return $this->belongsTo(Program::class, 'id_program');
    }
}
