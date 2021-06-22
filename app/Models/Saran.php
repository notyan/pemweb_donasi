<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;
    protected $table = 'saran';
    const UPDATED_AT = 'edited_at';
    const CREATED_AT = 'inserted_at';

}
