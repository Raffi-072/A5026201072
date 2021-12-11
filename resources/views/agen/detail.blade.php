@extends('layout.bahagia')

@section('title', 'Praktikm 3')
@section('judulhalaman', 'Detail Data Agen')

@section('konten')

    <a href="/Agen"> Kembali</a>

    <br />
    <br />

    <table border="1" class="table text-center">
        <tr>
            <th>Nama Agen</th>
            <th>Jumlah Agen</th>
            <th>Tersedia</th>
        </tr>
        @foreach ($agen as $a)
            <tr>
                <td>{{ $a->namaagen }}</td>
                <td>{{ $a->jumlahagen }}</td>
                <td>{{ $a->tersedia }}</td>
            </tr>
        @endforeach
    </table>

@endsection
