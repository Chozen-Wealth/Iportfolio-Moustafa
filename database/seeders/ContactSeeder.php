<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            [
                "street" => "Rue de la minoterie",
                "number" => 10,
                "city" => "Bruxelles",
                "zip" => 1000,
                "phone" => "04818209321",
                "email" => "monmail@gmail.com",
            ]
        ]);
    }
}
