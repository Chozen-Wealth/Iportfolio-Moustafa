<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index () {
        $skills = Skill::all();
        $about = About::first();
        return  view("back.skills.index", compact("skills", "about"));
    }
    public function create () {
        $about = About::first();
        return view("back.skills.create", compact("about"));
    }
    public function store (Request $request) {
        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->pourcentage = $request->pourcentage;
        $skill->save();

        return redirect()->route("index_skills");
    }
    public function edit ($id) {
        $skill = Skill::findOrFail($id);
        $about = About::first();
        return view("back.skills.edit", compact("skill", "about"));
    }
    public function update ($id, Request $request) {
        $skill = Skill::findOrFail($id);
        $skill->skill = $request->skill;
        $skill->pourcentage = $request->pourcentage;
        $skill->update();

        return redirect()->route("index_skills");
    }
    public function destroy ($id) {
        Skill::where("id", $id)->delete();
        return redirect()->route("index_skills");
    }
}
