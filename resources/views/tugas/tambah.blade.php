<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="id_pegawai" required="required"> <br/>
		Tanggal <input type="date" name="tanggal" required="required"> <br/>
		NamaTugas <input type="text" name="nama_tugas" required="required"> <br/>
		Status <input type="text" name="status" required="required"><br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
