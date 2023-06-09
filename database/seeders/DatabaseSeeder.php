<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'construction'
        ]);
        Category::create([
            'name' => 'agriculture'
        ]);
        Category::create([
            'name' => 'fashion'
        ]);
        
    }
}
