<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        $user = Auth::user();

        // CATAT LOGIN TERAKHIR
        $user->update([
            'last_login_at' => now(),
        ]);

        // REDIRECT SESUAI ROLE
        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        }

        if ($user->role === 'pegawai') {
            return redirect('/pegawai/dashboard');
        }

        return redirect('/pelanggan/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
}

    public function register(Request $request)
    {
        $data = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'no_telepon' => 'required|string|max:20',
        ]);

        $data['password'] = bcrypt($data['password']);

        // Semua pendaftaran dari halaman register = pelanggan
        $data['role'] = 'pelanggan';

        User::create($data);

        return redirect('/login')->with(
            'success',
            'Registrasi berhasil. Silakan login.'
        );
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}