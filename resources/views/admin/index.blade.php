@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <h1>Halaman Daftar Buku</h1>
                    @foreach ($buku as $data)
                        Nama Pengarang Buku : {{ $data->pengarang->nama_pengarang }} <br>
                        Email Pengarang : {{ $data->pengarang->email }} <br>
                        Nama Buku : {{ $data->nama_buku }} <br>
                        Jumlah Halaman : {{ $data->jumlah_halaman }} <br>
                        Translate Judul : {!! $data->translate_judul_buku ?? '<b>Belum ada Translate </b>' !!} <br>
                        <hr>
                    @endforeach

                    <div class="card-header">Data Penulis
                        <a href="{{ route('admin.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengarang</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($pengarang as $data)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            {{ $data->nama_pengarang }}
                                        </td>
                                        <td>
                                            {{ $data->email }}
                                        </td>
                                        <td>
                                            {{ $data->telepon }}
                                        </td>
                                        <td>
                                            <button class="btn btn-success">Edit</button>|
                                            <button class="btn btn-warning">Show</button>|
                                            <button class="btn btn-danger">Delete</button>|
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

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
                            </a>
                        </strong>
                    </footer>

                </div>
            </div>
        </div>
    </div>
@endsection
