<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark fw-bold">
                Form Edit Mahasiswa
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- NIM -->
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
                    </div>
                    <!-- Nama -->
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                    </div>
                    <!-- Kota -->
                    <div class="mb-3">
                        <label class="form-label">Kota</label>
                        <input type="text" name="kota" class="form-control" value="{{ $mahasiswa->kota }}" required>
                    </div>
                    <!-- Tombol -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-success">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
