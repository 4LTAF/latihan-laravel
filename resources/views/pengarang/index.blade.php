@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <center>
                        <h3>Halaman Pengarang</h3>
                    </center>
                    {{-- <div class="card-header">
                        <a href="{{ route('pengarang.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                    </div> --}}

                    <div class="card-body">

                        <div class="table-responsive">
                            <a href="{{ route('pengarang.create') }}" class="btn btn-success">Tambah Data Pengarang</a>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pengarang</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Action</th>
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
                                            {{ $data->tlp }}
                                        </td>
                                        <td>
                                            <a href="{{ route('pengarang.show', $data->id) }}"
                                                class="btn btn-warning">Show</a>|
                                            <a href="{{ route('pengarang.edit', $data->id) }}"
                                                class="btn btn-info">Edit</a>|
                                            <form action="{{ route('pengarang.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                            {{-- <button class="btn btn-danger">Delete</button>| --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
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
