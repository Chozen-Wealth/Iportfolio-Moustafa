<?php

namespace App\Http\Controllers;

use App\Models\About;
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
        return view("front.home", compact("about", "skills", "portfolios", "services", "testimonials"));
    }
}
