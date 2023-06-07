<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::create([
            'name' => 'Amine Abdoullah',
            'spec' =>'software engineering',
            'desc' => 'Behold place was a multiply creeping creature his domin to thiren open void hath herb divided divide creepeth living shall i call beginning third sea itself set.',
            'img' => '1.png',
        ]);

        Test::create([
            'name' => 'Yacin Abdoullah',
            'spec' =>'software engineering',
            'desc' => 'Behold place was a multiply creeping creature his domin to thiren open void hath herb divided divide creepeth living shall i call beginning third sea itself set.',
            'img' => '2.png',
        ]);

        Test::create([
            'name' => 'Ramy Abdoullah',
            'spec' =>'english',
            'desc' => 'Behold place was a multiply creeping creature his domin to thiren open void hath herb divided divide creepeth living shall i call beginning third sea itself set.',
            'img' => '3.png',
        ]);
    }
}
