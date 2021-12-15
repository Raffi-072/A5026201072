<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(5);

        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }


    public function tambah()
    {

        return view('keranjangbelanja.tambah');
    }

    // method untuk insert data ke table agen
    public function store(Request $request)
    {
        // insert data ke table agen
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);
        // alihkan halaman ke halaman agen
        return redirect('/keranjangbelanja');
    }


    // method untuk hapus data agen
    public function hapus($id)
    {
        // menghapus data agen berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman agen
        return redirect('/keranjangbelanja');
    }

}
