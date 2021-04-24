<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first-name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('mail@reception.com')->send(new ContactMail($data));

        return redirect('contact')->with('message', 'Votre message a bien été envoyé.');
    }
}
