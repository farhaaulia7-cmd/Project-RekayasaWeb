<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama'   => 'Farha Aulia Ramadani',
            'nim'    => '251011700871',
            'prodi'  => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email'  => 'farhaaulia7@gmail.com',
            'status' => 'Aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}