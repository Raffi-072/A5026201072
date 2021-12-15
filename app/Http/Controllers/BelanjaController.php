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


    public function store(Request $request)
    {

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);

        return redirect('/keranjangbelanja');
    }



    public function hapus($id)
    {

        DB::table('keranjangbelanja')->where('ID', $id)->delete();


        return redirect('/keranjangbelanja');
    }
}
