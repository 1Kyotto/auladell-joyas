@extends('template.dashboard')

@section('contenido')
{{--FORMULARIO NUEVO PRODUCTO--}}
<div class="col-span-10 h-[100vh] flex flex-col items-center justify-center font-secundario">
    <div class="w-[80%] h-[5%] flex items-center justify-start">
        <h4>Nuevo Producto</h4>
    </div>
    <div class=" h-[80%] w-[80%] flex">
        <div class="h-full w-1/2">
            {{--Previsualización de la imagen seleccionada--}}
            <img id="preview-image" src="" alt="Previsualización de la imagen" class="w-full h-full object-cover hidden">
        </div>
        {{--Formulario de Creación--}}
        <div class="flex flex-col items-start w-1/2 ml-10">
            {{--
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mb-4 w-full">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif--}}

            {{--Form de creación--}}
            <form method="POST" action="{{ route('product.store') }}" class="flex flex-col items-start w-full" enctype="multipart/form-data">
                @csrf

                {{--Foto--}}
                <label class="" for="product_image">Foto</label>
                <input type="file" id="product_image" name="product_image" class="outline-none w-full py-1 px-2 mb-2 bg-transparent border-2 rounded-md placeholder-gray-900" onchange="previewImage(event)">
                @error('product_image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                {{--Foto--}}
                
                {{--Nombre--}}
                <label for="name">Nombre del Producto</label>
                <input type="text" name="name" id="name" class="outline-none w-full py-1 px-2 mb-2 bg-transparent border-2 rounded-md placeholder-gray-900" maxlength="100">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                {{--Nombre--}}

                {{--Descripcion--}}
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="w-full py-1 px-2 mb-2 bg-transparent border-2 rounded-md placeholder-gray-900" rows="3"></textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                {{--Descripcion--}}

                {{--Categoría--}}
                <label for="category">Categoría</label>
                <select name="category" id="category" class="w-3/5">
                    <option value="" disabled selected>Selecciona una categoría</option>
                    <option value="Aros">Aros</option>
                    <option value="Anillos">Anillos</option>
                    <option value="Brazaletes">Brazaletes</option>
                    <option value="Collares">Collares</option>
                </select>
                @error('category')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                {{--Categoría--}}

                {{--CHECKBOX ESTADO--}}
                <div class="form-group form-check">
                    <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
                    <label class="form-check-label" for="is_active">¿Producto activo?</label>
                </div>
                {{--CHECKBOX ESTADO--}}

                {{--TEST DE HORAS--}}
                <label for="hours_worked">Horas de trabajo</label>
                <input type="number" name="hours_worked" id="hours_worked" class="form-control" step="0.1" min="0">
                @error('hours_worked')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <label for="hourly_rate">Tarifa por hora</label>
                <input type="number" name="hourly_rate" id="hourly_rate" class="form-control" step="0.01" min="0">
                @error('hourly_rate')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                {{--TEST DE HORAS--}}

                {{--SELECCION MATERIALES--}}
                <select id="material-select" class="form-control">
                    <option value="" disabled selected>Selecciona un material</option>
                    @foreach($materials as $material)
                        <option value="{{ $material->id }}" data-price="{{ $material->price_per_unit }}">
                            {{ $material->name }} ({{ $material->unit }}) - Precio: {{ $material->price_per_unit }}
                        </option>
                    @endforeach
                </select>
                @error('materials')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <input type="number" id="material-quantity" class="form-control" placeholder="Cantidad" step="0.1" min="0">
                @error('materials.*.quantity')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <button type="button" class="btn btn-success" id="add-material">Añadir</button>

                    
                <div id="selected-materials">
                    <!-- Materiales seleccionados aparecerán aquí -->
                </div>
                {{--SELECCION MATERIALES--}}

                <button type="submit" class="btn btn-primary">Crear Producto</button>
            </form>
            {{--Form de edicion--}}
        </div>
        {{--Formulario de edición--}}
    </div>
</div>
{{--FORMULARIO EDICIÓN PRODUCTO--}}

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

{{-- Script para previsualizar la imagen seleccionada --}}
<script>
    function previewImage(event) {
        var image = document.getElementById('preview-image'); // Seleccionar el elemento de imagen
        var file = event.target.files[0]; // Obtener el archivo seleccionado

        if (file) { // Si hay un archivo seleccionado
            var objectURL = URL.createObjectURL(file); // Crear una URL temporal
            image.src = objectURL; // Establecer el src de la imagen
            image.classList.remove('hidden'); // Quitar la clase 'hidden' para mostrar la imagen
        } else {
            image.src = ''; // Limpiar la URL si no hay archivo
            image.classList.add('hidden'); // Ocultar la imagen si no hay archivo seleccionado
        }
    }
</script>
@endsection