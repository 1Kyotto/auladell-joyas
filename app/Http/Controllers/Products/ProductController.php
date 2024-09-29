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
            'category' => 'required|string|in:Aros,Anillos,Brazaletes,Collares',
            'is_active' => 'sometimes|boolean',
            'hours_worked' => 'required|numeric|min:0',
            'hourly_rate' => 'required|numeric|min:0',
            'materials' => 'array'
        ]);

        $hours_worked = $request->input('hours_worked');
        $hourly_rate = $request->input('hourly_rate');
        $cost_base = $hours_worked * $hourly_rate;

        $materials = $request->input('materials');
        $cost_materials = 0;

        if (!empty($materials)) {
            foreach ($materials as $material_id => $material_data) {
                $material = Material::find($material_id);
                $quantity = $material_data['quantity'] ?? 0;

                $cost_materials += $material->price_per_unit * $quantity;
            }
        }

        $base_price = $cost_base + $cost_materials;

        Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'base_price' => $base_price,
            'category' => $validatedData['category'],
            'is_active' => $request->has('is_active') ? $request->input('is_active') : true,
        ]);

        return redirect()->route('admin.product')->with('success', 'El producto creado correctamente.');
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

    public function toggleStatus(Request $request, $id)
    {
        // Buscar el producto por su ID
        $product = Product::findOrFail($id);

        // Actualizar el estado 'is_active' basado en si el checkbox está marcado o no
        $product->is_active = $request->has('is_active');
        $product->save();

        // Redirigir de nuevo a la página de productos o donde prefieras
        return redirect()->route('admin.product')->with('success', 'El estado del producto ha sido actualizado.');
    }
}