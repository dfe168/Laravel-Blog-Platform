<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dara',
            'email' => 'dkaban@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => User::ROLE_ADMIN,
        ]);

        Post::factory(50)->create();
        Category::factory(5)->create();
    }
}
