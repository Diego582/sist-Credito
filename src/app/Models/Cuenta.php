<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;
    protected $fillable = ['banco', 'cbu', 'alias'];

    public function beneficiarios()
    {
        return $this->belongsToMany(Beneficiario::class);
    }
}
