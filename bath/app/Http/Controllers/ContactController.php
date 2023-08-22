<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('user.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:50'],
            'email' => ['required', 'max:50'],
            'message' => ['required', 'max:250'],
        ]);

        Contact::create(
            [
                'title' => $request->title,
                'email' => $request->email,
                'message' => $request->message,
            ]
        );

        return redirect()->route('user.top');
    }
}
