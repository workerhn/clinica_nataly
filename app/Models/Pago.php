<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

    protected $fillable = [
        'paciente_id',
        'monto',
        'fecha_pago',
        'metodo_pago',
    ];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
