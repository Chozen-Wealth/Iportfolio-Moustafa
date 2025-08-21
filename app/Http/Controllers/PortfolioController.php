<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function edit ($id) {
        $portfolios = Portfolio::all();
        return view("back.portfolio.edit");
    }
    public function update ($id, Request $request) {
        $portfolio = Portfolio::where("id", $id)->update([
            "img" => $request->img,
            "filter" => $request->filter
        ]);
        return redirect()->route("");
    }
    public function create () {
        return view("back.portfolio.create");
    }
    public function store () {

    }
    public function destroy () {

    }
}
