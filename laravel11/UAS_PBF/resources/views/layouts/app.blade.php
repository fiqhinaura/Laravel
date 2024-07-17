<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD - Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SILOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('unitkerja.index') }}">Unit Kerja</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('/pindex') }}">Penerimaan All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('penerimaan.pindex') }}">Penerimaan Tidak Kode</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('penerimaan.penerimaanTI') }}">Penerimaan Teknik Informatika</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
