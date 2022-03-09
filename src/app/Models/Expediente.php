<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos

    public function creditos()
    {
        return $this->hasMany(Credito::class);
    }
}
