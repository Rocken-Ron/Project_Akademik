<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white fw-bold">
                Form Tambah Mahasiswa
            </div>
            <div class="card-body">
                <!-- Error validation -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <!-- NIM -->
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM"
                            value="{{ old('nim') }}" required>
                    </div>
                    <!-- Nama -->
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                            value="{{ old('nama') }}" required>
                    </div>
                    <!-- Kota -->
                    <div class="mb-3">
                        <label class="form-label">Kota</label>
                        <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota"
                            value="{{ old('kota') }}" required>
                    </div>
                    <!-- Tombol -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-success">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
