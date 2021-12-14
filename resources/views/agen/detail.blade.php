@extends('layout.bahagia')

@section('title', 'Praktikm 3')
@section('judulhalaman', 'Detail Data Agen')

@section('konten')

    <a href="/agen"> Kembali</a>

    <br />
    <br />

    @foreach ($agen as $a)
        <br>
        <div>
            <label for="namaagen">Nama Agen</label>
            <p>{{ $a->namaagen }}
            <p>
        </div>

        <div>
            <label for="jumlahagen">Jumlah Agen</label>
            <p>{{ $a->jumlahagen }}
            <p>
        </div>

        <div>
            <label for="tersedia">Tersedia</label>
            <p>{{ $a->tersedia }}
            <p>
        </div>

    @endforeach

@endsection
