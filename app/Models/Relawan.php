<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    protected $table = 'relawan';

    /**
     * Get the id_user that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
    
    /**
     * Get the id_provinsi that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }

    /**
     * Get the id_kab that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_kab(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'id_kab');
    }

    /**
     * Get the id_kec that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_kec(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
    }

    /**
     * Get the id_kelurahan that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }

    /**
     * Get the id_profesi that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_profesi(): BelongsTo
    {
        return $this->belongsTo(RefProfesi::class, 'id_profesi');
    }

    /**
     * Get the id_jk that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_jk(): BelongsTo
    {
        return $this->belongsTo(RefVendorSaving::class, 'id_jk');
    }

    /**
     * Get the id_agama that owns the Relawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function id_agama(): BelongsTo
    {
        return $this->belongsTo(RefAgama::class, 'id_agama');
    }
}
