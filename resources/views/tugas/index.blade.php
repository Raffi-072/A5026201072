@extends('layout.bahagia')

@section('title','Tugas CRUD-Query Builder')
@section('judulhalaman','Data Tugas')

@section('konten')

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1" class="table text-center">
		<tr>
            <th>ID</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
            <td>{{ $t->ID }}</td>
			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tugas->links() }}

</body>

@endsection
