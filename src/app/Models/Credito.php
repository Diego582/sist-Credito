<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;

    protected $fillable = ['linea','monto','detalle','fecha_entrega','expediente_id'];



    //relacion uno a muchos inversa

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }

    //relacion muchos a muchos

    public function cuotas()
    {
        return $this->belongsToMany(Cuota::class);
    }

    public function beneficiarios()
    {
        return $this->belongsToMany(Beneficiario::class);
    }

    public function tipos()
    {
        return $this->belongsToMany(Tipo::class);
    }
}
