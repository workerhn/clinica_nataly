<div class="mb-3">
    <label for="paciente_id" class="form-label">Paciente</label>
    <select name="paciente_id" class="form-select" required>
        <option value="">Seleccionar</option>
        @foreach($pacientes as $p)
            <option value="{{ $p->id }}" {{ old('paciente_id', $cita->paciente_id ?? '') == $p->id ? 'selected' : '' }}>
                {{ $p->nombre }} {{ $p->apellido }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="doctor_id" class="form-label">Doctor</label>
    <select name="doctor_id" class="form-select" required>
        <option value="">Seleccionar</option>
        @foreach($doctores as $d)
            <option value="{{ $d->id }}" {{ old('doctor_id', $cita->doctor_id ?? '') == $d->id ? 'selected' : '' }}>
                {{ $d->nombre }} {{ $d->apellido }} - {{ $d->especialidad }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="fecha_hora" class="form-label">Fecha y Hora</label>
    <input type="datetime-local" name="fecha_hora" class="form-control"
        value="{{ old('fecha_hora', isset($cita) ? \Carbon\Carbon::parse($cita->fecha_hora)->format('Y-m-d\TH:i') : '') }}" required>
</div>

<div class="mb-3">
    <label for="motivo" class="form-label">Motivo (opcional)</label>
    <textarea name="motivo" class="form-control">{{ old('motivo', $cita->motivo ?? '') }}</textarea>
</div>
