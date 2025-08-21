<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index () {
        $skills = Skill::all();
        return  view("back.skills.index", compact("skills"));
    }
    public function create () {
        return view("back.skills.create");
    }
    public function store (Request $request) {
        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->pourcentage = $request->pourcentage;
        $skill->save();

        return redirect()->route("store_skills");
    }
    public function edit ($id) {
        $skill = Skill::where("id", $id)->first();
        return view("back.skills.edit", compact("skill"));
    }
    public function update ($id, Request $request) {
        $skill = Skill::where("id", $id);
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
