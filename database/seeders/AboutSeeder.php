<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::insert([
            [
                "subtitle" => "Ceci est le sous-titre de la page about.",
                "birthdate" => "1999-08-21",
                "website" => "www.monsite.com",
                "phone" => "04818209321",
                "city" => "Bruxelles",
                "age" => "26",
                "degree" => "Master",
                "email" => "monmail@gmail.com",
                "freelance" => "Disponible maintenant",
                "subtext" => "Ceci est le texte en dessous de mes informations pour ajout plus de détails.",
            ]
        ]);
    }
}
