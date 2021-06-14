<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    protected $table = 'relawan';

    /**
     * Get the user that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
    
    /**
     * Get the provinsi that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }

    /**
     * Get the kabupaten that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'id_kab');
    }

    /**
     * Get the kecamatan that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
    }

    /**
     * Get the kelurahan that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }

    /**
     * Get the profesi that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profesi(): BelongsTo
    {
        return $this->belongsTo(RefProfesi::class, 'id_profesi');
    }

    /**
     * Get the ref_vendor_saving that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ref_vendor_saving(): BelongsTo
    {
        return $this->belongsTo(RefVendorSaving::class, 'id_jk');
    }

    /**
     * Get the agama that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agama(): BelongsTo
    {
        return $this->belongsTo(RefAgama::class, 'id_agama');
    }
}
