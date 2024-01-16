<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web',
            'slug' => 'web'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'IT Support',
            'slug' => 'it-support'
        ]);

        // Tambahkan 2 kategori lagi
        Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);
    }
}
