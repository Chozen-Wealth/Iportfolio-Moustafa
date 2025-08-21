<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index () {
        $testimonials = Testimonial::all();
        return  view("back.testimonials.index", compact("testimonials"));
    }
    public function create () {
        return view("back.testimonials.create");
    }
    public function store (Request $request) {
        $testimonial = new Testimonial();
        $testimonial->comment = $request->comment;
        $testimonial->img = $request->img;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->save();

        return redirect()->route("index_testimonials");
    }
    public function edit ($id) {
        $testimonial = Testimonial::where("id", $id)->first();
        return view("back.testimonials.edit", compact("testimonial"));
    }
    public function update ($id, Request $request) {
        $testimonial = Testimonial::where("id", $id);
        $testimonial->comment = $request->comment;
        $testimonial->img = $request->img;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->update();

        return redirect()->route("index_testimonials");
    }
    public function destroy ($id) {
        Testimonial::where("id", $id)->delete();
        return redirect()->route("index_testimonials");
    }
}
