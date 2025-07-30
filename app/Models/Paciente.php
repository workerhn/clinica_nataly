<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'fecha_nacimiento',
        'telefono',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class);

    }
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
