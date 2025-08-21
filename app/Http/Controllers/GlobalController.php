<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function home () {
        $about = About::first();
        return view("front.home", compact("about"));
    }
}
