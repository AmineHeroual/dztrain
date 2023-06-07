<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            'name' => 'Oussama Zero',
            'spec' =>'web development',
            'img' => '1.png',
        ]);

        Trainer::create([
            'name' => 'Islam Codezella',
            'spec' =>'web development',
            'img' => '2.png',
        ]);

        Trainer::create([
            'name' => 'Boubaker Maamri',
            'spec' =>'dentist',
            'img' => '3.png',
        ]);

        Trainer::create([
            'name' => 'Eric Berg',
            'spec' =>'doctor',
            'img' => '4.png',
        ]);

        Trainer::create([
            'name' => 'Omar Abderahim',
            'spec' =>'english teacher',
            'img' => '5.png',
        ]);
    }
}
