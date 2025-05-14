<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            // Global currencies
            ['name' => 'US Dollar', 'code' => 'USD', 'symbol' => '$']
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
