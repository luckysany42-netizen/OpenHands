<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan pesan ke database
        ContactMessage::create([
            'user_id' => Auth::id(),
            'name'    => Auth::user()->name,
            'email'   => Auth::user()->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Kirim email ke Gmail admin
        Mail::raw("
            Name: " . Auth::user()->name . "
            Email: " . Auth::user()->email . "
            Subject: {$request->subject}

Message:
{$request->message}
        ", function ($mail) use ($request) {
            $mail->to('openhands1718@gmail.com')
                 ->subject('New Contact Message: ' . $request->subject)
                 ->replyTo(Auth::user()->email, Auth::user()->name); // <-- FIX UTAMA
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
