<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $objs = [
            'Physics',
            'English',
            'Japanes',
            'Chemistry',
            'History',
            'Biology',
            'Russian',
            'Pedagogy',
            'Informatics',
            'Ecology',
        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        }
    }
}
