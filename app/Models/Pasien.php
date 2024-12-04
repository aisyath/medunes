<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
// use Mchev\Banhammer\Traits\Bannable;

class Pasien extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded();
        // Chain fluent methods for configuration options
    }

    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class, 'pasien_id', 'id_pasien');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id' );
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_pasien',
        'id',
        'NIK',
        'img_pasien',
        'jenis_kelamin',
        'alamat',
        'no_tlp',
        'TB',
        'BB',
        'status'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_pasien';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_pasien';
}