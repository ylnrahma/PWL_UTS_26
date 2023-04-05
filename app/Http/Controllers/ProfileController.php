<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Yuliyana Rahmawati')
            ->with('short_name', 'Rahma')
            ->with('nim', '2141720241')
            ->with('absen', '26')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'yuliyanarahma03@gmail.com')
            ->with('usertelegram', 'ylnrahma')
            ->with('tiktok', 'ylnrahmaa')
            ->with('idline', '@ylynrahma')
            ->with('ig', '@ylnrahma');
    }
}
