@extends('layouts.admin')

@section('content')
    <h1>Halaman Daftar Buku</h1>
    @foreach ($buku as $data)
        Nama Pengarang Buku : {{ $data->pengarang->nama_pengarang }} <br>
        Email Pengarang : {{ $data->pengarang->email }} <br>
        Nama Buku : {{ $data->nama_buku }} <br>
        Jumlah Halaman : {{ $data->jumlah_halaman }} <br>
        Translate Judul : {!! $data->translate_judul_buku ?? '<b>Belum ada Translate </b>' !!} <br>
        <hr>
    @endforeach
    <footer class="main-footer">
        <strong>
            Daftar Pengarang <br>
            @foreach ($pengarang as $data)
                Nama Pengarang Buku : {{ $data->nama_pengarang }} <br>
                Email Pengarang : {{ $data->email }} <br>
                Tlp Pengarang : {{ $data->tlp }} <br>
                <hr>
                @foreach ($data->book as $item)
                    Nama Buku : {{ $item->nama_buku }} <br>
                    @if ($item->jumlah_halaman > 1)
                        Jumlah Halaman Buku : {{ $item->jumlah_halaman }} <br>
                    @else
                        Jumlah Halaman Buku : <b>Belum Mempunyai Halaman</b> <br>
                    @endif
                    Translate Judul Buku : {!! $data->translate_judul_buku ?? '<b>Belum ada Translate </b>' !!} <br>
                    <hr>
                @endforeach
                <hr>
            @endforeach
            </a>.
        </strong>
    </footer>

@endsection
