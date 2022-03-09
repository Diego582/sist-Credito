<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cuota extends Model
{
    use HasFactory;

    //relacion muchos a muchos 
    
    public function creditos()
    {
        return $this->BelongsToMany(Credito::class);
    }
}
