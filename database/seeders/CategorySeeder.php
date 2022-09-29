<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Categoria de Exemplo',
            'color' => '#ff0000',
            'user_id' => 1
        ]);

        Category::create([
            'title' => 'Categoria de Exemplo 2',
            'color' => '#00ff00',
            'user_id' => 1
        ]);

        Category::create([
            'title' => 'Categoria de Exemplo 3',
            'color' => '#0000ff',
            'user_id' => 1
        ]);
    }
}
