@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Daftar Unit Kerja</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Unit</th>
                        <th>Nama Unit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unitkerja as $uk)
                    <tr>
                        <td>{{ $uk->kd_unit }}</td>
                        <td>{{ $uk->nama_unit }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $unitkerja->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
