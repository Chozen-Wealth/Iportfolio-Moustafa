<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit () {
        $contact = Contact::first();
        return view("back.contact.edit", compact("contact"));
    }
    public function update () {
        return redirect()->route("edit_contact");
    }
}
