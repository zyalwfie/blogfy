<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'fashion'
        ]);
        
        Category::create([
            'name' => 'crime'
        ]);

        Category::create([
            'name' => 'sport'
        ]);

        Category::create([
            'name' => 'travel'
        ]);

        Category::create([
            'name' => 'weather'
        ]);
    }
}
