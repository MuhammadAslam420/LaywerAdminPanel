<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
    protected $table='petitions';
    public function court(){
        return $this->belongsTo(Court::class);
    }
    public function city(){
        return $this->belongsTo(city::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function hirings(){
        return $this->hasMany(Hiring::class);
    }
}
