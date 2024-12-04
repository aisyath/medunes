<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['dokter_id', 'pasien_id', 'activity_type', 'description'];

    public function dokter() 
    {
        return $this->belongsTo(Dokter::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}

