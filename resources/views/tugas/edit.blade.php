<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD-Tugas</title>
</head>
<body>

	<h2>Edit Tugas</h2>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" name="id_pegawai" required="required" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"value="{{ $t->Tanggal }}"> <br/>
		NamaTugas <input type="text" name="nama_tugas" required="required" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" name="status" required="required" pattern="[A-Za-z]{1}" placeholder="Y/N" value="{{ $t->Status }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
