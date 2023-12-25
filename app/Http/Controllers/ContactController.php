<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('pages.contact');
    }

    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->back()->with('msg-envoye', 'votre message a été envoyé avec succès, nous vous repondrons au plus vite. Merci !');
    }
}
