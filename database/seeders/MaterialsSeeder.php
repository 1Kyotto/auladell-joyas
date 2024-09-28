<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Materials\Material;

class MaterialsSeeder extends Seeder
{
    private function getPriceFromAPI($metal)
    {
        $apiKey = env('METALPRICE_API_KEY');
        $baseCurrency = 'CLP';

        $url = "https://api.metalpriceapi.com/v1/latest?api_key={$apiKey}&base={$baseCurrency}&currencies=XAU,XAG,XPT";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            $metalKey = "CLP{$metal}";
            $priceInTroyOunce = $data['rates'][$metalKey] ?? null;
            
            if ($priceInTroyOunce) {
                $priceInGrams = $priceInTroyOunce / 31.1035;
                return $priceInGrams;
            }
        }

        return null;
    }

    public function run(): void
    {
        $metals = [
            ['name' => 'Oro', 'description' => 'Oro de alta pureza', 'unit' => 'gr', 'symbol' => 'XAU'],
            ['name' => 'Plata', 'description' => 'Plata pura', 'unit' => 'gr', 'symbol' => 'XAG'],
            ['name' => 'Platino', 'description' => 'Platino puro', 'unit' => 'gr', 'symbol' => 'XPT'],
        ];

        foreach ($metals as $metal) {
            $price = $this->getPriceFromAPI($metal['symbol']);

            if (is_null($price)) {
                $price = 0;
            }

            Material::create([
                'name' => $metal['name'],
                'description' => $metal['description'],
                'unit' => $metal['unit'],
                'price_per_unit' => $price,
                'quantity_in_stock' => rand(100, 500),
            ]);
        }
    }
}
