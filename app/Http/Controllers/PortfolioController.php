<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index () {
        $portfolios = Portfolio::all();
        $about = About::first();
        return view("back.portfolios.index", compact("portfolios", "about"));
    }
    public function edit ($id) {
        $portfolio = Portfolio::where("id", $id)->first();
        $about = About::first();
        return view("back.portfolios.edit", compact("portfolio", "about"));
    }
    public function update ($id, Request $request) {
        $portfolio = Portfolio::where("id", $id)->first();
        $portfolio->filter = $request->filter;
        if ($request->hasFile("img")) {
            if ($portfolio->img) {
                $file_path = str_replace("storage/", "", $portfolio->img);
                Storage::disk("public")->delete($file_path);
            }

            $file = $request->file("img");
            $file_name = time()."_".$file->getClientOriginalName();
            $path = $request->file("img")->storeAs("portfolio", $file_name, "public");
            $portfolio->img = "storage/".$path;
        }
        $portfolio->update();
        
        return redirect()->route("index_portfolios")->with("success", "Modifié avec succès !");
    }
    public function create () {
        $about = About::first();
        return view("back.portfolios.create", compact("about"));
    }
    public function store (Request $request) {
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        if ($request->hasFile("img")) {
            $file = $request->file("img");
            $file_name = time()."_".$file->getClientOriginalName();
            $path = $request->file("img")->storeAs("portfolio", $file_name, "public");
            $portfolio->img = "storage/".$path;
        }
        $portfolio->save();

        return redirect()->route("index_portfolios")->with("success", "Projet ajouté avec succès !");
    }
    public function destroy ($id) {
        $portfolio = Portfolio::where("id", $id)->first();
        if ($portfolio->img) {
            $file_path = str_replace("storage/", "", $portfolio->img);
            Storage::disk("public")->delete($file_path);
        }
        Portfolio::where("id", $id)->delete();
        return redirect()->route("index_portfolios");
    }
}
