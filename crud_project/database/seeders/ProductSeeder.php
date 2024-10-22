<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Product 1', 'price' => 10.00, 'stock' => 100]);
        Product::create(['name' => 'Product 2', 'price' => 20.00, 'stock' => 50]);
        Product::create(['name' => 'Product 3', 'price' => 30.00, 'stock' => 30]);
    }
}
