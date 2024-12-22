<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['nama' => 'Mobil Sedan'],
            ['nama' => 'Mobil SUV'],
            ['nama' => 'Mobil Hatchback'],
            ['nama' => 'Mobil MPV'],
            ['nama' => 'Motor Bebek'],
            ['nama' => 'Motor Sport'],
            ['nama' => 'Motor Matic'],
            ['nama' => 'Motor Trail'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
