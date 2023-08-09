<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->categories();
    }

    private function categories()
    {
        \App\Models\Category::create(['name' => 'Auto']);
        \App\Models\Category::create(['name' => 'Moto']);
        \App\Models\Category::create(['name' => 'Nautica']);
        \App\Models\Category::create(['name' => 'Elettronica']);
        \App\Models\Category::create(['name' => 'Casalinghi']);
        \App\Models\Category::create(['name' => 'Arredamento']);
        \App\Models\Category::create(['name' => 'Giardinaggio']);
        \App\Models\Category::create(['name' => 'Animali']);
        \App\Models\Category::create(['name' => 'Immobili']);
        \App\Models\Category::create(['name' => 'Lavoro']);

    }
}
