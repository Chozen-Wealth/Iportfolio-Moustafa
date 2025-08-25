<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit () {
        $about = About::first();
        return view("back.abouts.edit", compact("about"));
    }
    public function update ( Request $request) {
        $about = About::first();
        $about->subtitle = $request->subtitle;
        $about->birthdate = $request->birthdate;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->subtext = $request->subtext;

        if ($request->hasFile("image")) {
            if ($about->avatar->image) {
                $filepath = str_replace("storage/", "", $about->avatar->image);
                Storage::disk("public")->delete($filepath);
            }
            $file = $request->file("image");
            $file_name = time()."_".$file->getClientOriginalName();
            $path = $request->file("image")->storeAs("about", $file_name, "public");
            $about->avatar->image = "storage/".$path;
            $about->avatar->save();
        }
        $about->update();
        
        return redirect()->route("edit_about")->with("success", "Les changements ont bien été sauvegardés !");
    }
}
