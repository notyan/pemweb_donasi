<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program';
    protected $fillable = ['id_user', 'nama_program', 'info', 'target', 'batas_akhir', 'inserted_at', 'inserted_by', 'edited_at', 'edited_by'];
    public $timestamps = false;

    public function userProgram()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
