<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Materials\Material;

class MaterialsSeeder extends Seeder
{
    // Función para obtener el precio de la API según el metal
    private function getPriceFromAPI($metal)
    {
        // Tu clave de API desde el archivo .env
        $apiKey = env('METALPRICE_API_KEY');
        $baseCurrency = 'CLP'; // Puedes cambiar a CLP si lo prefieres

        // URL de la API para obtener los precios del metal
        $url = 'https://api.metalpriceapi.com/v1/latest?api_key={$apiKey}&base={$baseCurrency}&currencies=XAU,XAG,XPT';

        // Hacemos la petición a la API usando Http de Laravel
        $response = Http::get($url);

        // Si la respuesta es exitosa, devolvemos el precio
        if ($response->successful()) {
            $data = $response->json();
            // Obtenemos el precio correcto basado en el símbolo del metal y la moneda
            $metalKey = "CLP{$metal}"; // Concatenamos "CLP" con el símbolo del metal, ejemplo: CLPXAU
            $priceInTroyOunce = $data['rates'][$metalKey] ?? null;
            
            if ($priceInTroyOunce) {
                // Convertimos el precio de onzas troy a gramos (1 troy ounce = 31.1035 gramos)
                $priceInGrams = $priceInTroyOunce / 31.1035;
                return $priceInGrams;
            }
        }

        return null; // Si falla, retornamos null
    }

    public function run(): void
    {
        // Definimos los metales que vamos a insertar
        $metals = [
            ['name' => 'Oro', 'description' => 'Oro de alta pureza', 'unit' => 'gr', 'symbol' => 'XAU'],
            ['name' => 'Plata', 'description' => 'Plata pura', 'unit' => 'gr', 'symbol' => 'XAG'],
            ['name' => 'Platino', 'description' => 'Platino puro', 'unit' => 'gr', 'symbol' => 'XPT'],
        ];

        // Se itera sobre los materiales
        foreach ($metals as $metal) {
            $price = $this->getPriceFromAPI($metal['symbol']); // Obtenemos el precio desde la API

            // Si no se puede obtener el precio, asignamos un valor predeterminado
            if (is_null($price)) {
                $price = 0; // Precio por defecto si falla la API
            }

            // Creamos el registro en la tabla 'materials'
            Material::create([
                'name' => $metal['name'],
                'description' => $metal['description'],
                'unit' => $metal['unit'],
                'price_per_unit' => $price, // Precio obtenido de la API o el valor por defecto
                'quantity_in_stock' => rand(100, 500), // Genera un stock aleatorio
            ]);
        }
    }
}
