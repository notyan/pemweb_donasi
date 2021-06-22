<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefVendorSaving extends Model
{
    use HasFactory;
    protected $table = 'ref_vendor_saving';
    const UPDATED_AT = 'edited_at';
    const CREATED_AT = 'inserted_at';
}
