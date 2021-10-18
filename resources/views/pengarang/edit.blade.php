@extends('layouts.admin')

@section('content')
    <title>Halaman Edit Pengarang</title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <h1>Edit Pengarang Buku</h1>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('pengarang.update', $pengarang->id) }}" method="POST" accept="">
                            @csrf
                            @method('PUT')

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Nama Pengarang</label>
                                    <input type="text" value="{{ $pengarang->nama_pengarang }}" class=" form-control"
                                        name="nama_pengarang" placeholder="Masukan nama pengarang" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Email</label>
                                    <input type="email" value="{{ $pengarang->email }}" class="form-control"
                                        name="email" placeholder="Masukan alamat email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Nomor Telepon</label>
                                    <input type="text" value="{{ $pengarang->tlp }}" class=" form-control" name="tlp"
                                        placeholder="Masukan nomor telepon" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-danger btn-block">Ubah Data</button>
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
