<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $doctor->nombre ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" name="apellido" value="{{ old('apellido', $doctor->apellido ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="especialidad" class="form-label">Especialidad</label>
    <input type="text" name="especialidad" value="{{ old('especialidad', $doctor->especialidad ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" value="{{ old('telefono', $doctor->telefono ?? '') }}" class="form-control">
</div>
