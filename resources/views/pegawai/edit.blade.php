@extends('layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh">
    <h2 class="mt-3">Edit Pegawai</h2>

    <div class="card mb-4">
        <div class="card-body">

            <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="id_pegawai" class="form-label">ID Pegawai</label>
                    <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" style="" value="{{ $pegawai->id_pegawai }}" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $pegawai->nama }}" style="text-transform: capitalize;" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="L" {{ $pegawai->gender == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                        <option value="P" {{ $pegawai->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telepon</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control" value="{{ $pegawai->no_telp }}" style="text-transform: capitalize;" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ $pegawai->email }}" name="email" id="email" class="form-control" style="" required>
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control" required>
                        <option value="HRD" {{ $pegawai->jabatan == 'HRD' ? 'selected' : '' }}>HRD</option>
                        <option value="Manajer" {{ $pegawai->jabatan == 'Manajer' ? 'selected' : '' }}>Manajer</option>
                        <option value="Staff" {{ $pegawai->jabatan == 'Staff' ? 'selected' : '' }}>Staff</option>
                        <option value="Teknisi" {{ $pegawai->jabatan == 'Teknisi' ? 'selected' : '' }}>Teknisi</option>
                        <!-- Tambahkan jabatan lainnya sesuai kebutuhan -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji (Rupiah)</label>
                    <select name="gaji" id="gaji" class="form-control" required>
                        <option value="5000000" {{ $pegawai->gaji == 5000000 ? 'selected' : '' }}>5.000.000</option>
                        <option value="7000000" {{ $pegawai->gaji == 7000000 ? 'selected' : '' }}>7.000.000</option>
                        <option value="10000000" {{ $pegawai->gaji == 10000000 ? 'selected' : '' }}>10.000.000</option>
                        <option value="15000000" {{ $pegawai->gaji == 15000000 ? 'selected' : '' }}>15.000.000</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{ $pegawai->tanggal_masuk }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="aktif" {{ $pegawai->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="tidak aktif" {{ $pegawai->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
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