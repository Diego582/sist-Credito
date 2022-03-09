<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;

    //relacion muchos a muchos 

    public function cuentas()
    {
        return $this->belongsToMany(Cuenta::class);
    }
}
