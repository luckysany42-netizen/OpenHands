<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // ------- Update Foto Profil -------
        if ($request->hasFile('photo')) {

            // Hapus foto lama jika ada
            if ($user->photo && file_exists(public_path('profile_photos/' . $user->photo))) {
                unlink(public_path('profile_photos/' . $user->photo));
            }

            // Simpan foto baru
            $file = $request->file('photo');
            $filename = uniqid().'_'.$file->getClientOriginalExtension();

            // Perbaikan nama file yang benar (fix bug lama)
            $filename = uniqid().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('profile_photos'), $filename);

            // Simpan nama file ke database
            $user->photo = $filename;
        }


        // ------- Update Data User -------
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika user mengganti password
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Hapus akun user
     */
    public function destroy()
    {
        $user = Auth::user();

        // Jika user punya foto, hapus dari folder
        if ($user->photo && file_exists(public_path('profile_photos/' . $user->photo))) {
            unlink(public_path('profile_photos/' . $user->photo));
        }

        // Logout sebelum delete
        Auth::logout();

        // Hapus akun user
        $user->delete();

        return redirect('/')
            ->with('success', 'Akun Anda telah berhasil dihapus.');
    }
}
