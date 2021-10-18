@extends('layouts.admin')

@section('content')
    <title>Halaman Tambah Pengarang</title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <h1>Tambah Pengarang Buku</h1>

                    <div class="card-header">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pengarang.store') }}" method="post" accept="">
                            @csrf

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Nama Pengarang</label>
                                    <input type="text" value="{{ old('nama_pengarang') }}" class="form-control"
                                        name="nama_pengarang" placeholder="Masukan nama pengarang" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Email</label>
                                    <input type="email" value="{{ old('email') }}" class=" form-control" name="email"
                                        placeholder="Masukan alamat email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Nomor Telepon</label>
                                    <input type="text" value="{{ old('tlp') }}" class=" form-control" name="tlp"
                                        placeholder="Masukan nomor telepon" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-danger btn-block">Simpan Data</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <footer class="main-footer">
                        <strong>
                            {{--  --}}
                            </a>
                        </strong>
                    </footer>

                </div>
            </div>
        </div>
    </div>
@endsection
