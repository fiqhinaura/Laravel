@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Daftar Kelas</div>
        <div class="card-body">
            <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Tahun Ajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $kls)
                    <tr>
                        <td>{{ $kls->nama_kelas }}</td>
                        <td>{{ $kls->tahun_ajaran }}</td>
                        <td>
                            <a href="{{ route('kelas.edit', $kls->id_kelas) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('kelas.destroy', $kls->id_kelas) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $kelas->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
