<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index () {
        $messages = Message::all();
        $about = About::first();
        return view("back.messages.index", compact("messages", "about"));
    }
    public function store (Request $request) {
        $message = new Message();
        $message->nom = $request->nom;
        $message->email = $request->email;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();

        return redirect()->to(route("home")."#contact")->with('success', "Votre message a bien été envoyé !");
    }
    public function destroy ($id) {
        Message::where("id", $id)->delete();
        return redirect()->route("index_messages");
    }
}
