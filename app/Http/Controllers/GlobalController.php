<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function home () {
        $about = About::first();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        return view("front.home", compact("about", "skills", "portfolios"));
    }
}
