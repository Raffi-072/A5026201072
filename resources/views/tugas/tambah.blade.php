<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD-Query Builder</title>
</head>
<body>
    <h2>Tugas Query Builder</h2>
	<h2>Data Tugas</h2>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="id_pegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		NamaTugas <input type="text" name="nama_tugas" required="required"> <br/>
		Status <input type="text" name="status" required="required" pattern="[A-Za-z]{1}" placeholder="Y/N"><br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
