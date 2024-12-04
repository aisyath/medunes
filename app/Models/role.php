<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ="roles";
    protected $primaryKey = 'id_role';
    protected $fillable = ['role'];
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
