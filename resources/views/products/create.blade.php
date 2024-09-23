@extends('template.master')

@section('contenido')
{{--FORMULARIO CREACION PRODUCTO--}}
<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Nombre del Producto</label>
        <input type="text" name="name" id="name" class="form-control" maxlength="100" required>
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="hours_worked">Horas de trabajo</label>
        <input type="number" name="hours_worked" id="hours_worked" class="form-control" step="0.1" min="0" required>
    </div>

    <div class="form-group">
        <label for="hourly_rate">Tarifa por hora</label>
        <input type="number" name="hourly_rate" id="hourly_rate" class="form-control" step="0.01" min="0" required>
    </div>

    <div class="form-group">
        <label for="materials">Seleccionar materiales</label>
        <div class="input-group mb-3">
            <select id="material-select" class="form-control">
                <option value="" disabled selected>Selecciona un material</option>
                @foreach($materials as $material)
                    <option value="{{ $material->id }}" data-price="{{ $material->price_per_unit }}">
                        {{ $material->name }} ({{ $material->unit }}) - Precio: {{ $material->price_per_unit }}
                    </option>
                @endforeach
            </select>
            <input type="number" id="material-quantity" class="form-control" placeholder="Cantidad" step="0.1" min="0">
            <button type="button" class="btn btn-success" id="add-material">Añadir</button>
        </div>

        <div id="selected-materials">
            <!-- Materiales seleccionados aparecerán aquí -->
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Crear Producto</button>
</form>

<script>
    document.getElementById('add-material').addEventListener('click', function () {
        const select = document.getElementById('material-select');
        const quantityInput = document.getElementById('material-quantity');
        const selectedMaterials = document.getElementById('selected-materials');
        
        const materialId = select.value;
        const materialName = select.options[select.selectedIndex].text;
        const materialPrice = select.options[select.selectedIndex].getAttribute('data-price');
        const quantity = quantityInput.value;

        if (!materialId || quantity <= 0) {
            alert('Selecciona un material y una cantidad válida.');
            return;
        }

        // Crear un div para el material seleccionado
        const materialDiv = document.createElement('div');
        materialDiv.classList.add('selected-material-item');
        materialDiv.innerHTML = `
            <span>${materialName} - Cantidad: ${quantity}</span>
            <input type="hidden" name="materials[${materialId}][quantity]" value="${quantity}">
            <button type="button" class="btn btn-warning btn-sm edit-material">Editar</button>
            <button type="button" class="btn btn-danger btn-sm remove-material">Eliminar</button>
        `;

        // Añadir el material seleccionado al contenedor
        selectedMaterials.appendChild(materialDiv);

        // Limpiar los campos de selección
        select.selectedIndex = 0;
        quantityInput.value = '';

        // Funcionalidad para eliminar material
        materialDiv.querySelector('.remove-material').addEventListener('click', function () {
            materialDiv.remove();
        });

        // Funcionalidad para editar cantidad
        materialDiv.querySelector('.edit-material').addEventListener('click', function () {
            const newQuantity = prompt('Ingresa la nueva cantidad:', quantity);
            if (newQuantity && newQuantity > 0) {
                materialDiv.querySelector('span').innerText = `${materialName} - Cantidad: ${newQuantity}`;
                materialDiv.querySelector('input').value = newQuantity;
            } else {
                alert('Cantidad no válida.');
            }
        });
    });
</script>
@endsection