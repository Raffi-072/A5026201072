<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AgenController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table agen
        //$agen = DB::table('agen')->get();

        $agen = DB::table('agen')->paginate(5);
        // mengirim data agen ke view index
        return view('agen.index', ['agen' => $agen]);

    }

    // method untuk menampilkan view form tambah agen
    public function tambah()
    {

        // memanggil view tambah
        return view('agen.tambah');
    }

    // method untuk insert data ke table agen
    public function store(Request $request)
    {
        // insert data ke table agen
        DB::table('agen')->insert([
            'namaagen' => $request->nama,
            'jumlahagen' => $request->jumlah,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman agen
        return redirect('/agen');
    }

    // method untuk edit data agen
    public function edit($id)
    {
        // mengambil data agen berdasarkan id yang dipilih
        $agen = DB::table('agen')->where('kodeagen', $id)->get();
        // passing data agen yang didapat ke view edit.blade.php
        return view('agen.edit', ['agen' => $agen]);
    }

    // method untuk melihat detail data agen
    public function detail($id)
    {
        // mengambil data agen berdasarkan id yang dipilih
        $agen = DB::table('agen')->where('kodeagen', $id)->get();
        // passing data agen yang didapat ke view edit.blade.php
        return view('agen.detail', ['agen' => $agen]);
    }


    // update data agen
    public function update(Request $request)
    {
        // update data agen
        DB::table('agen')->where('kodeagen', $request->id)->update([
            'namaagen' => $request->nama,
            'jumlahagen' => $request->jumlah,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman agen
        return redirect('/agen');
    }

    // method untuk hapus data agen
    public function hapus($id)
    {
        // menghapus data agen berdasarkan id yang dipilih
        DB::table('agen')->where('kodeagen', $id)->delete();

        // alihkan halaman ke halaman agen
        return redirect('/agen');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table agen sesuai pencarian data
        $agen = DB::table('agen')
            ->where('namaagen', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data agen ke view index
        return view('agen.index', ['agen' => $agen]);
    }
}
