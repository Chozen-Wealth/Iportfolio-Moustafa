<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Avatar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = About::first();
        Avatar::insert([
            [
                "image" => "storage/about/daisuke-kambe.jpg",
                "about_id" => $about->id,
            ]
        ]);
    }
}
