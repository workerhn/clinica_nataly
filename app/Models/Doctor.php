<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
        'telefono',
    ];

    public function citas() {
    return $this->hasMany(Cita::class);
}

}
