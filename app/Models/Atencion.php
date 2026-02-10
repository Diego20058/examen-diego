<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    /** @use HasFactory<\Database\Factories\AtencionFactory> */
    use HasFactory;
    protected $fillable = ['fecha', 'hora', 'motivo_de_atencion',];
      
    public function consultas()
    {
        return $this->belongsTo(Consultas::class);
    }

    public function trabajadores()
    {
        return $this->belongsTo(Trabajadores::class);
    }

    public function datos()
    {
        return $this->belongsTo(Datos::class);
    }

}
