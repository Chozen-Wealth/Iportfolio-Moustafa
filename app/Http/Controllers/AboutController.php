<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit () {
        $about = About::first();
        return view("back.about.edit", compact("about"));
    }
    public function update () {
        return redirect()->route("edit_about");
    }
}
