<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $paciente->nombre ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" name="apellido" value="{{ old('apellido', $paciente->apellido ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="dni" class="form-label">DNI</label>
    <input type="text" name="dni" value="{{ old('dni', $paciente->dni ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $paciente->fecha_nacimiento ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" value="{{ old('telefono', $paciente->telefono ?? '') }}" class="form-control">
</div>
