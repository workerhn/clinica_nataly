<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    // App\Models\Cita.php
  protected $fillable = ['paciente_id', 'doctor_id', 'fecha_hora', 'motivo'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

}
