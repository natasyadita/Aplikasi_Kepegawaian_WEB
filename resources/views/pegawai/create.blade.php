@extends('layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh">
    <h2 class="mt-3">Tambah Pegawai</h2>

    <div class="card mb-4">
        <div class="card-body">
            
            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id_pegawai" class="form-label">ID Pegawai</label>
                    <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" style="" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" style="text-transform: capitalize;" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="">Pilih Gender</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                 <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telepon</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control" style="text-transform: capitalize;" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" style="" required>
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control" required>
                        <option value="HRD">HRD</option>
                        <option value="Manajer">Manajer</option>
                        <option value="Staff">Staff</option>
                        <option value="Teknisi">Teknisi</option>
                        <!-- Tambahkan jabatan lainnya sesuai kebutuhan -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji (Rupiah)</label>
                    <select name="gaji" id="gaji" class="form-control" required>
                        <option value="5000000">5.000.000</option>
                        <option value="7000000">7.000.000</option>
                        <option value="10000000">10.000.000</option>
                        <option value="15000000">15.000.000</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Tidak Aktif</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Pegawai</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</main>
@endsection