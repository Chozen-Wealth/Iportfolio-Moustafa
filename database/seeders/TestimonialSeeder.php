<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::insert([
            [
                "comment" => "Proin iaculis purus consequat sa
                cure digni ssim donec porttitora entu
                suscipit rhoncus. Accusantium quarr
                ultricies eget id, aliquam eget nibh ei
                Maecen aliquam, risus at semper.",
                "img" => "storage/portfolio-assets/testimonials-1.jpg",
                "name" => "Alice Johnson",
                "position" => "Marketing Manager"
            ],
            [
                "comment" => "Proin iaculis purus consequat sa
                cure digni ssim donec porttitora entu
                suscipit rhoncus. Accusantium quarr
                ultricies eget id, aliquam eget nibh ei
                Maecen aliquam, risus at semper.",
                "img" => "storage/portfolio-assets/testimonials-2.jpg",
                "name" => "Michael Smith",
                "position" => "Lead Developer"
            ],
            [
                "comment" => "Proin iaculis purus consequat sa
                cure digni ssim donec porttitora entu
                suscipit rhoncus. Accusantium quarr
                ultricies eget id, aliquam eget nibh ei
                Maecen aliquam, risus at semper.",
                "img" => "storage/portfolio-assets/testimonials-3.jpg",
                "name" => "Sophie Martin",
                "position" => "Project Coordinator"
            ],
            [
                "comment" => "Proin iaculis purus consequat sa
                cure digni ssim donec porttitora entu
                suscipit rhoncus. Accusantium quarr
                ultricies eget id, aliquam eget nibh ei
                Maecen aliquam, risus at semper.",
                "img" => "storage/portfolio-assets/testimonials-5.jpg",
                "name" => "David Lee",
                "position" => "UI/UX Designer"
            ],
        ]);
    }
}
