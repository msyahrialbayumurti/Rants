<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('pages.user.home'); // Pastikan file ada di resources/views/auth/login.blade.php
    }

    public function showAboutme()
    {
        return view('pages.user.tentangkami');
    }
    
    public function showLayanan()
    {
        return view('pages.user.layanan');
    }

    public function showKontak()
    {
        return view('pages.user.kontak');
    }

    public function beranda()
    {
        return view('pages.user.beranda');
    }
}
