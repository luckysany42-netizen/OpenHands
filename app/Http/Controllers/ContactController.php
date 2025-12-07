<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Tampilkan halaman contact
    public function index()
    {
        return view('pages.contact');
    }

    // Proses pengiriman pesan
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan pesan ke database
        ContactMessage::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Kirim email ke Gmail admin
        Mail::raw("
Name: {$request->name}
Email: {$request->email}
Subject: {$request->subject}

Message:
{$request->message}
        ", function ($mail) use ($request) {
            $mail->to('openhands1718@gmail.com')
                 ->subject('New Contact Message: ' . $request->subject);
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
