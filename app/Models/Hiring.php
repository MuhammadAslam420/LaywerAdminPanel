<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring extends Model
{
    use HasFactory;
    protected $table='hirings';

    public function petition(){
        return $this->belongsTo(Petition::class);
    }
}
