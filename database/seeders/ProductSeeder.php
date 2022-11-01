<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(3)
            ->create();

        Customer::factory()
            ->count(5)
            ->create();

        $customers = Customer::all();
        Product::all()->each(function ($product) use ($customers) {
            $product->customers()->attach(
                $customers->random(5)->pluck('id')->toArray()
            );
        });
    }
}
