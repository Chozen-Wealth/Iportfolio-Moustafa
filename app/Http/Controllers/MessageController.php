<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index () {
        $messages = Message::all();
        return view("back.messages.index", compact("messages"));
    }
    public function store (Request $request) {
        return redirect()->route("home");
    }
    public function destroy ($id) {
        Message::where("id", $id)->delete();
        return redirect()->route("back.messages.index");
    }
}
