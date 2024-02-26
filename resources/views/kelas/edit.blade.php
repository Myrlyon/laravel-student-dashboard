@extends('layouts.main')

@section('container')
    <div style="max-width: 600px; margin: auto;">
        <h3>Edit Siswa</h3>

        <form action="{{ route('kelas.update', ['id' => $kelas->id]) }}" method="post"
            style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            @csrf
            @method('patch')
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" required
                        value="{{ old('nama_kelas', $kelas->nama_kelas) }}" name="nama_kelas">
                </div>
            </div>
            <button type="submit" class="btn btn-primary"
                style="display: inline-block; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #007bff; color: #fff; border: 1px solid #007bff; border-radius: 4px; cursor: pointer;">Simpan
                Perubahan</button>

            <a href="{{ route('kelas.all') }}" class="btn btn-secondary"
                style="display: inline-block; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #6c757d; color: #fff; border: 1px solid #6c757d; border-radius: 4px; margin-left: 10px;">Kembali</a>
        </form>
    </div>
@endsection
