<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('test'),
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $this->call([
            FaqSeeder::class,
            QuestionSeeder::class,
            ArticleSeeder::class,
            JudulSOSeeder::class,
            WorkplanSeeder::class,
            DivisionSeeder::class,
        ]);  
    }
}
