<?php

namespace App\Http\Controllers;

use App\Models\Product; // pastikan modelnya benar
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function show($id)
    {
        // ambil data campaign berdasarkan ID
        $campaign = Product::findOrFail($id);

        // kirim ke view learn.blade.php
        return view('pages.learn', compact('campaign'));
    }
}
