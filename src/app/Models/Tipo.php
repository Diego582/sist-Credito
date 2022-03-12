<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    public function beneficiarios()
    {
        return $this->belongsToMany(Beneficiario::class);
    }

    public function creditos()
    {
        return $this->belongsToMany(Credito::class);
    }
}
