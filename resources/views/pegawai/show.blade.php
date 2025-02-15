@extends('layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh">
    <h2 class="mt-3">Detail Pegawai</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $pegawai->nama }}</h4>

            <style>
                td {
                    padding-right: 30px;
                }
            </style>

            <table border="0">
                <tr>
                    <td><strong>ID Pegawai</strong></td>
                    <td>{{ $pegawai->id_pegawai }}</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>{{ $pegawai->gender == "L" ? "Laki - Laki" : "Perempuan" }}</td>
                </tr>
                <tr>
                    <td><strong>Jabatan</strong></td>
                    <td>{{ $pegawai->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <td><strong>No. Telepon</strong></td>
                    <td>{{ $pegawai->no_telp }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $pegawai->email }}</td>
                </tr>
                <tr>
                    <td><strong>Jabatan</strong></td>
                    <td>{{ $pegawai->jabatan }}</td>
                </tr>
                <tr>
                    <td><strong>Gaji</strong></td>
                    <td>Rp{{ number_format($pegawai->gaji, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td><strong>Status</strong></td>
                    <td>{{ $pegawai->status }}</td>
                </tr>
            </table>
          
        </div>
    </div>
    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</main>
@endsection
