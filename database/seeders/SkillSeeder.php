<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                "skill" => "Web Dev Frontend",
                "pourcentage" => 95,
            ],
            [
                "skill" => "Web Dev Backend",
                "pourcentage" => 80,
            ],
            [
                "skill" => "Graphic Design",
                "pourcentage" => 100,
            ],
            [
                "skill" => "React",
                "pourcentage" => 85,
            ],
            [
                "skill" => "Next.js",
                "pourcentage" => 80,
            ],
        ]);
    }
}
