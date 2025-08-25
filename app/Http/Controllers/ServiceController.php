<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index () {
        $services = Service::all();
        $about = About::first();
        return  view("back.services.index", compact("services", "about"));
    }
    public function create () {
        return view("back.services.create");
    }
    public function store (Request $request) {
        $service = new Service();
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect()->route("index_services");
    }
    public function edit ($id) {
        $service = Service::where("id", $id)->first();
        return view("back.services.edit", compact("services"));
    }
    public function update ($id, Request $request) {
        $service = Service::where("id", $id);
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->update();

        return redirect()->route("index_services");
    }
    public function destroy ($id) {
        Service::where("id", $id)->delete();
        return redirect()->route("index_services");
    }
}
