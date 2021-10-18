@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <center>
                        <h3>Data Pengarang {{ $pengarang->nama_pengarang }}</h3>
                    </center>

                    <div class="card-body">
                        <div class="col-lg-12">
                            <label for="nama_pengarang">
                                Nama Pengarang :
                            </label>
                            {{ $pengarang->nama_pengarang }}
                            <br>
                            <label for="email">
                                Email :
                            </label>
                            {{ $pengarang->email }}
                            <br>
                            <label for="tlp">
                                Nomer Telepon :
                            </label>
                            {{ $pengarang->tlp }}
                            <br>
                        </div>
                    </div>

                    {{-- footer --}}
                    {{-- Daftar Pengarang <br>
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
                            @endforeach --}}


                </div>
            </div>
        </div>
    </div>
@endsection
