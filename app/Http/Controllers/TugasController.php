<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    //
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table pegawai
        $tugas = DB::table('tugas')->get(); //hasil get adalah array of object [object][]

        // mengirim data pegawai ke view index
        return view('tugas.index', ['tugas' => $tugas]); //teknik komunikasi atau passing value antara controller dan view

    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tugas.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'IDPegawai' => $request->id_pegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->nama_tugas,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas'); //tidak return view, karena jadi tidak fleksibel
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit', ['tugas' => $tugas]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->id_pegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->nama_tugas,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tugas')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
}
