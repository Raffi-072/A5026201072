@extends('layout.bahagia')

@section('title', 'Praktikum 3')
@section('judulhalaman', 'Data Agen')

@section('konten')

    <a href="/agen/tambah"> + Tambah Agen Baru</a>

    <div class="container col-sm-12" align="center">
        <form action="/agen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Agen berdasarkan merk .."
                value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>

        <br>
    </div>

    <table border="1" class="table text-center">
        <tr>
            <th>Nama Agen</th>
            <th>Jumlah Agen</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($agen as $a)
            <tr>
                <td>{{ $a->namaagen }}</td>
                <td>{{ $a->jumlahagen }}</td>
                <td>{{ $a->tersedia }}</td>
                <td>
                    <a href="/agen/view/{{ $a->kodeagen }}">View Details</a>
                    |
                    <a href="/agen/edit/{{ $a->kodeagen }}">Edit</a>
                    |
                    <a href="/agen/hapus/{{ $a->kodeagen }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $agen->links() }}

@endsection
