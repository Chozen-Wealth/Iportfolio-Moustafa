<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function home () {
        $about = About::first();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $contact = Contact::first();
        $adresse = $contact->number." ".$contact->street." ".$contact->zip." ".$contact->city;
        $map = urlencode($adresse);
        return view("front.home", compact("about", "skills", "portfolios", "services", "testimonials", "contact", "map"));
    }
    public function backnav () {
        $about = About::first();
        return view('layouts.back', compact("about"));
    }
}
