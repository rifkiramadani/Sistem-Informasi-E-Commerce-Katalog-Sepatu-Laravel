<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kategori sepatu
        Category::create([
            'Jenis' => 'Olahraga',
            'name' => 'Sports Shoes'
        ]);

        Category::create([
            'jenis' => 'Casual',
            'name' => 'Casual Shoes'
        ]);

        Category::create([
            'jenis' => 'Kulit',
            'name' => 'Leathers Shoes'
        ]);

        // kategori barang bekas
        Category::create([
            'jenis' => "Jaket",
            'name' => 'Jacket',
        ]);

        Category::create([
            'jenis' => 'Baju',
            'name' => 'Shirt'
        ]);

        Category::create([
            'jenis' => 'Celana',
            'name' => 'Pants'
        ]);
    }
}
