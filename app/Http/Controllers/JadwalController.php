<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class JadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        return view('jadwal', ['jadwal' => $jadwal]);
    }

    public function find($id){
        $jadwal[] = Jadwal::find($id);
        return view('jadwal', ['jadwal' => $jadwal]);
    }

    public function create(){
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view('form_jadwal', ['mahasiswa' => $mahasiswa, 'dosen' => $dosen]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'mahasiswa_id' => 'required',
            'dosen_id' => 'required',
            'judul' => 'required',            
        ]);
        
        $jadwalAwal = $request->tahunAwal."-".$request->bulanAwal."-".$request->tanggalAwal." ".$request->jamAwal.":".$request->menitAwal;
        $jadwalAkhir = $request->tahunAkhir."-".$request->bulanAkhir."-".$request->tanggalAkhir." ".$request->jamAkhir.":".$request->menitAkhir;

        Jadwal::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'dosen_id' => $request->dosen_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'awal' => $jadwalAwal,
            'akhir' => $jadwalAkhir
        ]);

        return redirect('/jadwal');
    }

    public function edit($id){
        $jadwal = Jadwal::find($id);
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view ('form_jadwal_edit', ['jadwal' => $jadwal,'dosen' => $dosen, 'mahasiswa' => $mahasiswa]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'mahasiswa_id' => 'required',
            'dosen_id' => 'required',
            'judul' => 'required',            
        ]);

        $jadwalAwal = $request->tahunAwal."-".$request->bulanAwal."-".$request->tanggalAwal." ".$request->jamAwal.":".$request->menitAwal;
        $jadwalAkhir = $request->tahunAkhir."-".$request->bulanAkhir."-".$request->tanggalAkhir." ".$request->jamAkhir.":".$request->menitAkhir;
        
        $jadwal = Jadwal::find($id);
        $jadwal->mahasiswa_id = $request->mahasiswa_id;
        $jadwal->dosen_id = $request->dosen_id;
        $jadwal->judul = $request->judul;
        $jadwal->deskripsi = $request->deskripsi;
        $jadwal->awal = $jadwalAwal;
        $jadwal->akhir = $jadwalAkhir;
        $jadwal->save();
        return redirect('/jadwal');    
    }

    public function delete($id){
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }
}
