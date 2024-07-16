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
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Tahun Ajaran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kelas as $kls)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kls->nama_kelas }}</td>
            <td>{{ $kls->tahun_ajaran }}</td>
            <td>
                <form action="{{ route('kelas.destroy', $kls->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('kelas.edit', $kls->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $kelas->links() !!}
</div>
@endsection
