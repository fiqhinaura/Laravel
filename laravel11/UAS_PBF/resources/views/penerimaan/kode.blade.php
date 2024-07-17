@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Penerimaan</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kode Penerima</th>
                                    <th>Tanggal Penerimaan</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Kode Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penerimaan as $p)
                                    <tr>
                                        <td>{{ $p->kd_penerima }}</td>
                                        <td>{{ $p->tgl_penerimaan }}</td>
                                        <td>{{ $p->tgl_return }}</td>
                                        <td>{{ $p->unitkerja->nama_unit }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $penerimaan->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
