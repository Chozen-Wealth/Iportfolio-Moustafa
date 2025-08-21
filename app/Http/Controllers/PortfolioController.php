<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index () {
        $portfolios = Portfolio::all();
        return view("back.portfolios.index");
    }
    public function edit ($id) {
        $portfolios = Portfolio::all();
        return view("back.portfolios.edit");
    }
    public function update ($id, Request $request) {
        $portfolio = Portfolio::where("id", $id);
        $portfolio->img = $request->img;
        $portfolio->filter = $request->filter;
        $portfolio->update();
        
        return redirect()->route("index_portfolios");
    }
    public function create () {
        return view("back.portfolios.create");
    }
    public function store (Request $request) {
        $portfolio = new Portfolio();
        $portfolio->img = $request->img;
        $portfolio->filter = $request->filter;
        $portfolio->save();

        return redirect()->route("index_portfolios");
    }
    public function destroy ($id) {
        Portfolio::where("id", $id)->delete();
        return redirect()->route("index_portfolios");
    }
}
