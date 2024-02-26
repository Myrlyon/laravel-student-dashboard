@extends('layouts.main')

@section('container')
    <h3>Create Kelas</h3>

    <form action="/kelas/store" method="post">
        @csrf

        <div class="mb-3">
            <label for="nis" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
        </div>

        {{-- <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div> --}}

        {{-- <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" name="kelas_id" id="">
                @foreach ($kelas as $Kelas)
                    <option value="{{ $Kelas->id }}">{{ $Kelas->nama_kelas }}</option>
                @endforeach 
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('kelas.all') }}" class="btn btn-secondary"
            style="display: inline-block; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #6c757d; color: #fff; border: 1px solid #6c757d; border-radius: 4px; margin-left: 10px;">Kembali</a>
    </form>
@endsection
