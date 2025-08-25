<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit () {
        $contact = Contact::first();
        $about = About::first();
        $adresse = $contact->number." ".$contact->street." ".$contact->zip." ".$contact->city;
        $map = urlencode($adresse);
        return view("back.contacts.edit", compact("contact", "about", "map"));
    }
    public function update (Request $request) {
        $contact = Contact::first();
        $contact->update($request->all());
        return redirect()->route("edit_contacts")->with("success", "Les changements ont bien été enregistrés !");
    }
}
