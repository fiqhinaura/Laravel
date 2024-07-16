@extends('layouts_app')

@section('content')
    <div class="container">
        <h1>Data Jurusan</h1>
        <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $jurusan->kode_jur }}</td>
                        <td>{{ $jurusan->nama_jur }}</td>
                        <td>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()"">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }
    </script>
@endsection
