<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    /** @use HasFactory<\Database\Factories\ConsultasFactory> */
    use HasFactory;
    protected $fillable = ['consulta_general', 'consulta_control', 'consulta_emergencia',];

    public function atencion()
    {
        return $this->hasOne(Atencion::class);
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
