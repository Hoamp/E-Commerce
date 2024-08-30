<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nama' => 'Alex',
            'username' => 'Alexanderia',
            'email' => 'test@example.com',
            'password' => bcrypt('11111'),
            'role' => 'admin'
        ]);

        \App\Models\User::create([
            'nama' => 'Awan',
            'username' => 'Awania',
            'email' => 'tes@example.com',
            'password' => bcrypt('11111'),
            'role' => 'customer'
        ]);

        Category::create([
            'nama' => 'baju'
        ]);
        Category::create([
            'nama' => 'celana'
        ]);
        Category::create([
            'nama' => 'jam-tangan'
        ]);
    }
}
