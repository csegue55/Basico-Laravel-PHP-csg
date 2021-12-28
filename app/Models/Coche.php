<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $guarded= ['satatus'];

    public function propietario(){                         // =>  propietario_id
        return $this->belongsTo(Propietario::class,'id_propietario');       // => id_propietario
    }
}
