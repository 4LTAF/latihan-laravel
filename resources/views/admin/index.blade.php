@extends('layouts.admin')

@section('content')
    <h1>Halaman Daftar Buku</h1>
    @foreach ($buku as $dataBuku)
        Nama Buku : {{ $dataBuku->nama_buku }} <br>
        Jumlah Halaman : {{ $dataBuku->jumlah_halaman }} <br>
        Translate Judul : {!! $dataBuku->translate_judul_buku ?? '<b>Belum ada Translate </b>' !!} <br>
        <hr>
    @endforeach
@endsection
