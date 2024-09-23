<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Models\Materials\Material;
use App\Models\Products\Product;

class ProductController
{
    public function create()
    {
        $materials = Material::all();
        return view('products.create', compact('materials'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'hours_worked' => 'required|numeric|min:0',
            'hourly_rate' => 'required|numeric|min:0',
            'materials' => 'array'
        ]);

        // Cálculo del Costo Base
        $hours_worked = $request->input('hours_worked');
        $hourly_rate = $request->input('hourly_rate');
        $cost_base = $hours_worked * $hourly_rate;

        // Cálculo del Costo de los Materiales
        $materials = $request->input('materials');
        $cost_materials = 0;

        if (!empty($materials)) {
            foreach ($materials as $material_id => $material_data) {
                $material = Material::find($material_id);
                $quantity = $material_data['quantity'] ?? 0;

                // Calculamos el costo de cada material multiplicando la cantidad por su precio por unidad
                $cost_materials += $material->price_per_unit * $quantity;
            }
        }

        // Cálculo del Precio Base Final
        $base_price = $cost_base + $cost_materials;

        // Guardamos el producto en la base de datos
        Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'base_price' => $base_price,
        ]);

        return redirect()->route('admin.product')->with('success', 'Producto creado correctamente.');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update($id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}