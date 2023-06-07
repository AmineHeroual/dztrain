<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 3; $i++) {
            for ($j=1; $j <= 6 ; $j++) {
                Course::create([
                    "category_id" => $i,
                    "trainer_id" => rand(1,5),
                    "name" => "course number $j - category number $j",
                    "small_desc" => "Lorem ipsum dolor sit amet , consectetur adipiscing elit. Sed accumsan viverra ex, non posuere nibh varius ac. Sed magna lorem, lacinia non hendrerit vel.",
                    "desc" => "Lorem ipsum dolor sit amet , consectetur adipiscing elit. Sed accumsan viverra ex, non posuere nibh varius ac. Sed magna lorem, lacinia non hendrerit vel, convallis in nunc. Nam accumsan erat bibendum, vehicula nisl quis, condimentum velit. Fusce eget orci id diam aliquet venenatis. Donec dignissim nibh sed interdum commodo. Vivamus porttitor erat ac augue rhoncus, sed ultrices ipsum imperdiet. Ut volutpat leo eget viverra pharetra. Cras quis leo consequat, bibendum magna vel, mattis risus. Donec vel malesuada justo, vitae auctor mauris. Vivamus aliquet libero eget metus pulvinar euismod. Sed egestas malesuada neque, eu faucibus erat scelerisque.",
                    "price" => rand(1000,5000),
                    "img" => "$i$j.png"
                ]);
            }
        }
    }
}
