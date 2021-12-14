@extends('layout.bahagia')

@section('title','Praktikum 3')
@section('judulhalaman','Edit Data Agen')

@section('konten')

	<a href="/agen"> Kembali</a>

	<br/>
	<br/>

	@foreach($agen as $a)
	<form action="/agen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->kodeagen }}"> <br/>
		Nama Agen <input type="text" required="required" name="nama" value="{{ $a->namaagen }}"> <br/>
		Jumlah Agen<input type="text" required="required" name="jumlah" value="{{ $a->jumlahagen }}"> <br/>
        Tersedia <br />
        <input type="radio" id="html" name="tersedia" value="Y" @if ($a->tersedia === 'Y') checked="checked" @endif>
        <label for="html">Y</label><br>
        <input type="radio" id="css" name="tersedia" value="N" @if ($a->tersedia === 'N') checked="checked" @endif>
        <label for="css">N</label><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
