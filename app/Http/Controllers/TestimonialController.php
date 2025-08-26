<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index () {
        $testimonials = Testimonial::all();
        $about = About::first();
        return  view("back.testimonials.index", compact("testimonials", "about"));
    }
    public function create () {
        $about = About::first();
        return view("back.testimonials.create", compact("about"));
    }
    public function store (Request $request) {
        $testimonial = new Testimonial();
        $testimonial->comment = $request->comment;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        if ($request->hasFile("img")) {
            $file = $request->file("img");
            $file_name = time()."_".$file->getClientOriginalName();
            $path = $file->storeAs("testimonials", $file_name, "public");
            $testimonial->img = "storage/".$path;
        }
        $testimonial->save();

        return redirect()->route("index_testimonials");
    }
    public function edit ($id) {
        $testimonial = Testimonial::where("id", $id)->first();
        $about = About::first();
        return view("back.testimonials.edit", compact("testimonial", "about"));
    }
    public function update ($id, Request $request) {
        $testimonial = Testimonial::where("id", $id)->first();
        $testimonial->comment = $request->comment;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        if ($request->hasFile("img")) {
            if ($testimonial->img) {
                $file_path = str_replace("storage/", "", $testimonial->img);
                Storage::disk("public")->delete($file_path);
            }

            $file = $request->file("img");
            $file_name = time()."_".$file->getClientOriginalName();
            $path = $request->file("img")->storeAs("testimonials", $file_name, "public");
            $testimonial->img = "storage/".$path;
        }
        $testimonial->update();

        return redirect()->route("index_testimonials");
    }
    public function destroy ($id) {
        Testimonial::where("id", $id)->delete();
        return redirect()->route("index_testimonials");
    }
}
