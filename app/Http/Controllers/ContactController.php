<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required',
        ]);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ];

        // Qui puoi inviare l'email
        Mail::to($request->email)->send(new ContactEmail($data));
        

        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }
}
