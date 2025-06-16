<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacto');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('ventas@beitperu.com')->send(new ContactMail($validated));

        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado! Puedes ver el correo en el log de Laravel o en la consola de desarrollo.');
    }
}
