<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = [
            'nama' = 'Mufid'
            'nim' = '102022300176'
            'prodi' = 'Sistem Informasi'
            'email' = 'mufid@student.telkomuniversity.ac.id'
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]) ;
        // - Kirim object tersebut ke view 'profil'
        
    }
}
