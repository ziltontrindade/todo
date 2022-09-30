<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Database\Seeders\CategoriesSeed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            //UserSeeder::class
        ]);

        User::factory(4)->create();
        Category::factory(30)->create();
        Task::factory(100)->create();
      
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
