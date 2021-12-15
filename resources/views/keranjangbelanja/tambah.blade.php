@extends('layout.bahagia')

@section('title', 'Praktikum 3')
@section('judulhalaman', 'Menambah Data Keranjang Belanja')

@section('konten')

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for = "kodebarang">Kode Barang</label> <input type="text" name="kodebarang" required="required" class = "form-control"> <br/>

            <label for = "jumlah">Jumlah Pembelian </label> <input type="text" name="jumlah" required="required" class = "form-control"> <br/>


            <label for = "harga">Harga Per item </label> <input type="text" name="harga" required="required" class = "form-control"> <br/>

            <br><br>
            <input type="submit" class="btn btn-success"  value="Simpan Data">
            <a href="/keranjangbelanja" class="btn btn-danger" > Kembali</a>
        </div>
    </form>

@endsection
