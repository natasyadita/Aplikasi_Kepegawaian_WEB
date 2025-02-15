@extends('layouts.app')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh">

    <h2 class="mb-4 mt-4">Data Pegawai</h2>
    <!-- Tombol Tambah Pegawai diubah menjadi warna pink -->
    <a href="{{ route('pegawai.create') }}" class="btn btn-sm btn-pink mb-4" style="background-color: #ff66b2; color: white; width: fit-content;">Tambah Pegawai</a>

    @if(session()->has('success'))
        <div class="alert alert-success mb-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <!-- Form Pencarian -->
    {{--  <form action="{{ route('pegawai.index') }}" method="GET" class="mt-3">
        <div class="d-flex justify-content-end">
            <div class="input-group w-25">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Cari nama pegawai..." aria-label="Search">
                <button class="btn btn-outline-secondary btn-sm" type="submit">Cari</button>
            </div>
        </div>
    </form> --}}

    <div class="table-responsive small">
        <table id="example" class="table mt-3 text-center"> <!-- Tabel rata tengah -->
            <thead class="table-dark"> <!-- Header dengan warna gelap -->
                <tr>
                    <th>No.</th>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tanggal Masuk</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pegawais as $pegawai)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pegawai->id_pegawai }}</td>
                <td>{{ ucwords($pegawai->nama) }}</td>
                <td>{{ $pegawai->gender == "L" ? "Laki - Laki" : "Perempuan"  }}</td>
                <td>{{ date('d-m-Y', strtotime($pegawai->tanggal_masuk)) }}</td> <!-- Format tanggal -->
                <td>{{ $pegawai->no_telp }}</td>
                <td>{{ $pegawai->email }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>Rp{{ number_format($pegawai->gaji, 0, ',', '.') }}</td> <!-- Format gaji -->
                <td>{{ ucwords($pegawai->status) }}</td>
                <td>
                    @if($pegawai->foto)
                        <img width="100px" src='/assets/{{ $pegawai->foto }}'>
                    @else
                    -
                    @endif
                </td>
                <td>
                    <!-- Lihat button dengan warna pastel biru -->
                    <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn btn-sm" style="background-color: #4d83c0; color: white;">
                        <i class="fas fa-eye"></i> Lihat
                    </a>
                    <br>
                    <!-- Edit button dengan warna pastel oranye -->
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-sm" style="background-color: #ae4047; color: white;">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <br>
                    <!-- Hapus button dengan warna pastel merah muda -->
                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm" style="background-color: #257383; color: white;">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>

<script>
    new DataTable('#example');
</script>

@endsection
