<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::all();
        return view('dosen', ['dosen' => $dosen]);
    }

    public function find($id){
        $dosen[] = Dosen::find($id);
        return view('dosen', ['dosen' => $dosen]);
    }
}
