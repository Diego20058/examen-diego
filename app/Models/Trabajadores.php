<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    /** @use HasFactory<\Database\Factories\TrabajadoresFactory> */
    use HasFactory;
    protected $fillable = ['nombre', 'telefono', 'correo', 'area',];

     public function atencion()
    {
        return $this->hasOne(Atencion::class);      
    }
    
    public function consultas()
    {
        return $this->hasOne(Consultas::class);
    }   

    public function datos()
    {
        return $this->hasOne(Datos::class);
    }
}

