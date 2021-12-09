@extends('layout.bahagia')

@section('title', 'Tutorial Membuat CRUD Pada Laravel')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <div class="container col-sm-12" align="center">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .."
                value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>

        <br>
    </div>

    <table border="1" class="table text-center">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}">View Details</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}

@endsection
