@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nama_kelas" class="col-md-4 col-form-label text-md-end">Nama Kelas</label>

                            <div class="col-md-6">
                                <input id="nama_kelas" type="text" class="form-control" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tahun_ajaran" class="col-md-4 col-form-label text-md-end">Tahun Ajaran</label>

                            <div class="col-md-6">
                                <input id="tahun_ajaran" type="text" class="form-control" name="tahun_ajaran" value="{{ $kelas->tahun_ajaran }}" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
