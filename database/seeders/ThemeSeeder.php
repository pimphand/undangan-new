<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            "name" => "Flower Watter",
            "slug" => "flower-watter",
            "image" => "themes/wQ5nHqLe50Ufw0c19UloP3VbxtNj1HfBU6tb9iFH.png",
            "type" => "Premium",
            "status" => true,

        ]);
    }
}
