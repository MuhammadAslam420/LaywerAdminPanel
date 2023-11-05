<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;
    protected $table='courts';
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function petition(){
        return $this->hasMany(Petition::class);
    }
}
