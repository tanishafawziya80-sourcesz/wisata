<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::orderByDesc('last_login_at')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.pengguna.index', compact('pengguna'));
    }
}