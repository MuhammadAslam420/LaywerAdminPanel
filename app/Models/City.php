<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table='cities';

    public function court(){
        return $this->belongsTo(Court::class);
    }
    public function petition()
    {
        return $this->hasMany(Petition::class);
    }
}
