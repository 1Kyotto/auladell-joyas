<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customizations\Customization;
use Carbon\Carbon;

class CustomizationsSeeder extends Seeder
{
    public function run(): void
    {
        // Personalizaciones para Aros
        Customization::create([
            'name' => 'Acabado Mate',
            'description' => 'Aros con un acabado mate que le da un aspecto moderno.',
            'additional_cost' => 20000, // en CLP
            'category' => 'Aros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Ajuste de Tamaño',
            'description' => 'Personalización del tamaño de los aros para un ajuste perfecto.',
            'additional_cost' => 15000,
            'category' => 'Aros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Baño de Oro',
            'description' => 'Aros con un baño de oro para un acabado más elegante.',
            'additional_cost' => 45000,
            'category' => 'Aros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Grabado Personalizado',
            'description' => 'Incluye grabado de iniciales o nombres en los aros.',
            'additional_cost' => 10000,
            'category' => 'Aros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Textura Martillada',
            'description' => 'Añade una textura martillada única a los aros.',
            'additional_cost' => 18000,
            'category' => 'Aros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Personalizaciones para Anillos
        Customization::create([
            'name' => 'Ajuste de Talla',
            'description' => 'Permite ajustar la talla del anillo según sea necesario.',
            'additional_cost' => 12000,
            'category' => 'Anillos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Oro Rosa',
            'description' => 'Anillo personalizado en oro rosa para un toque moderno.',
            'additional_cost' => 50000,
            'category' => 'Anillos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Grabado Interior',
            'description' => 'Añade un mensaje personalizado en el interior del anillo.',
            'additional_cost' => 15000,
            'category' => 'Anillos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Acabado Pulido',
            'description' => 'Anillo con un acabado ultra pulido que resalta su brillo.',
            'additional_cost' => 25000,
            'category' => 'Anillos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Anillo de Doble Banda',
            'description' => 'Diseño de doble banda que agrega un estilo moderno.',
            'additional_cost' => 40000,
            'category' => 'Anillos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Personalizaciones para Brazaletes
        Customization::create([
            'name' => 'Tamaño Ajustable',
            'description' => 'Brazalete con tamaño ajustable para mayor comodidad.',
            'additional_cost' => 17000,
            'category' => 'Brazaletes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Baño de Rodio',
            'description' => 'Baño de rodio que añade un brillo extra al brazalete.',
            'additional_cost' => 30000,
            'category' => 'Brazaletes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Grabado Externo',
            'description' => 'Personalización con grabado en la parte externa del brazalete.',
            'additional_cost' => 20000,
            'category' => 'Brazaletes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Acabado Satinado',
            'description' => 'Brazalete con acabado satinado para un look moderno.',
            'additional_cost' => 22000,
            'category' => 'Brazaletes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Incrustaciones de Metal',
            'description' => 'Añade detalles metálicos adicionales al brazalete.',
            'additional_cost' => 50000,
            'category' => 'Brazaletes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Personalizaciones para Collares
        Customization::create([
            'name' => 'Cadena Ajustable',
            'description' => 'Collar con cadena ajustable para diferentes longitudes.',
            'additional_cost' => 25000,
            'category' => 'Collares',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Acabado Cepillado',
            'description' => 'Collar con acabado cepillado para un look distintivo.',
            'additional_cost' => 20000,
            'category' => 'Collares',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Cierre Personalizado',
            'description' => 'Cierre del collar personalizado con detalles únicos.',
            'additional_cost' => 18000,
            'category' => 'Collares',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Baño de Oro Blanco',
            'description' => 'Collar con un baño de oro blanco que le da un acabado lujoso.',
            'additional_cost' => 45000,
            'category' => 'Collares',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Customization::create([
            'name' => 'Colgante Personalizado',
            'description' => 'Añade un colgante personalizado al collar.',
            'additional_cost' => 60000,
            'category' => 'Collares',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
