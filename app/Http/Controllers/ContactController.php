<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email',
            'user_phone' => 'required|string',
            'service' => 'nullable|string',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
