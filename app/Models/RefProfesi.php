<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProfesi extends Model
{
    use HasFactory;
    protected $table = 'ref_profesi';
    const UPDATED_AT = 'edited_at';
    const CREATED_AT = 'inserted_at';
}
