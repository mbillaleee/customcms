<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'section_name' => 'header',
            'color' => 'green',
            'background_color' => 'black',
        ]);
        Color::create([
            'section_name' => 'footer',
            'color' => 'white',
            'background_color' => 'yellow',
        ]);
        Color::create([
            'section_name' => 'blog',
            'color' => 'green',
            'background_color' => 'black',
        ]);
        Color::create([
            'section_name' => 'title',
            'color' => 'green',
            'background_color' => 'black',
        ]);
        Color::create([
            'section_name' => 'favicon',
            'color' => 'green',
            'background_color' => 'black',
        ]);
        Color::create([
            'section_name' => 'header',
            'color' => 'green',
            'background_color' => 'black',
        ]);
    }
}
