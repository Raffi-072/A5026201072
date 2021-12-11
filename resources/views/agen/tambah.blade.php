@extends('layout.bahagia')

@section('title', 'Praktikum 3')
@section('judulhalaman', 'Menambah Data Agen')

@section('konten')

	<a href="/agen"> Kembali</a>

	<br/>
	<br/>

	<form action="/agen/store" method="post">
		{{ csrf_field() }}
		Nama Agen <input type="text" name="nama" required="required"> <br/>
		Jumlah Agen <input type="text" name="jumlah" required="required"> <br/>
        Tersedia <br>
        <input type="radio" id="html" name="tersedia" value="Y" checked="checked">
        <label for="html">Y</label><br>
        <input type="radio" id="css" name="tersedia" value="N">
        <label for="css">N</label><br>
		<input type="submit" value="Simpan Data">
	</form>

</body>

@endsection
