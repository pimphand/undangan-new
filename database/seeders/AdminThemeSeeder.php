<?php

namespace Database\Seeders;

use App\Models\AdminTheme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminTheme::create([
            'user_id' => 1
        ]);
        AdminTheme::create([
            'user_id' => 2
        ]);
        AdminTheme::create([
            'user_id' => 3
        ]);
    }
}
