@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kelas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kelas.create') }}"> Tambah Kelas</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID Kelas</th>
            <th>Nama Kelas</th>
            <th>Tahun Ajaran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kelas as $kls)
        <tr>
            <td>{{ $kls->id_kelas }}</td>
            <td>{{ $kls->nama_kelas }}</td>
            <td>{{ $kls->tahun_ajaran }}</td>
            <td>
                <form action="{{ route('kelas.destroy', $kls->id_kelas) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('kelas.edit', $kls->id_kelas) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- <!-- Pagination links -->
    <div class="d-flex justify-content-end">
        {{ $kelas->links() }}
    </div> --}}
</div>
@endsection
