@extends('layouts_app')

@section('content')
    <div class="container">
        <h1>Edit Jurusan</h1>
        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kode_jur" class="form-label">Kode</label>
                <input type="text" class="form-control" id="kode_jur" name="kode_jur" value="{{ $jurusan->kode_jur }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_jur" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_jur" name="nama_jur" value="{{ $jurusan->nama_jur }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
