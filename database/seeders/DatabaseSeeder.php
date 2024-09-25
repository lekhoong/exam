<?php

namespace Database\Seeders;

use App\Models\fruits;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        fruits::create([
            'p_image'=>'image/carrot.png',
            'p_name'=>'potato',
            'p_mass'=>'100',
            'p_price'=>'10',
        ]);

        fruits::create([
            'p_name'=>'tomato',
            'p_mass'=>'200',
            'p_price'=>'20',
        ]);

        fruits::create([
            'p_name'=>'carrot',
            'p_mass'=>'300',
            'p_price'=>'30',
        ]);
    }
}
