<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function find($id){
        $mahasiswa[] = Mahasiswa::find($id);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
