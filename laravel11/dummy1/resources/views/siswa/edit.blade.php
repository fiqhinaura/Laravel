@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Siswa</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required>
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa:</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
            </div>
            <div class="form-group">
                <label for="id_kelas">Kelas:</label>
                <select class="form-control" id="id_kelas" name="id_kelas" required>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id_kelas }}" {{ $siswa->id_kelas == $kelasItem->id_kelas ? 'selected' : '' }}>{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
