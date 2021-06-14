<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontenBlog extends Model
{
    use HasFactory;
    protected $table = 'konten_blog';
    
    /**
     * Get the id_user that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_user(): BelongsTo {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
