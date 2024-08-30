<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GymClass;

class GymClassSeeder extends Seeder
{
    public function run()
    {
        GymClass::create([
            'name' => 'Yoga',
            'description' => 'A relaxing yoga class to improve flexibility.',
            'price' => 15.00,
        ]);

        GymClass::create([
            'name' => 'Pilates',
            'description' => 'Strengthen your core with Pilates.',
            'price' => 24.00,
        ]);

        GymClass::create([
            'name' => 'Zumba',
            'description' => 'Dance-based workout incorporating Latin and international music.',
            'price' => 20.00,
        ]);

        GymClass::create([
            'name' => 'Cross-Fit',
            'description' => 'High-intensity funcational movements',
            'price' => 18.00,
        ]);
    }
}
