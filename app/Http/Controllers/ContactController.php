<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact/contact');
    }

    public function confirmed(ContactRequest $request)
    {
        $contact = new \App\Models\Contacts;
        $contact->email = $request->email;
        $contact->nom = $request->nom;
        $contact->message = $request->message;
        $contact->save();

        Mail::to('administrateur@mail.com')
            ->send(new Contact($request->except('_token')));
        return view('contact/confirmed');
        
    }
}
