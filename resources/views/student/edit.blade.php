@extends('layouts.main')

@section('container')
    <div style="max-width: 600px; margin: auto;">
        <h3>Edit Siswa</h3>

        <form action="{{ route('student.update', ['id' => $student->id]) }}" method="post"
            style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            @csrf
            @method('patch')

            <div style="margin-bottom: 20px;">
                <label for="nis" style="display: block; font-weight: bold; margin-bottom: 5px;">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ $student->nis }}" required
                    style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ced4da; border-radius: 4px;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="nama" style="display: block; font-weight: bold; margin-bottom: 5px;">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama_siswa }}"
                    required
                    style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ced4da; border-radius: 4px;">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" name="kelas_id" id="kelas_id">
                    @foreach ($kelas as $class)
                        <option value="{{ $class->id }}" {{ $class->id == $student->kelas_id ? 'selected' : '' }}>
                            {{ $class->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="alamat" style="display: block; font-weight: bold; margin-bottom: 5px;">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required
                    style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ced4da; border-radius: 4px;">{{ $student->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary"
                style="display: inline-block; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #007bff; color: #fff; border: 1px solid #007bff; border-radius: 4px; cursor: pointer;">Simpan
                Perubahan</button>

            <a href="{{ route('student.all') }}" class="btn btn-secondary"
                style="display: inline-block; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #6c757d; color: #fff; border: 1px solid #6c757d; border-radius: 4px; margin-left: 10px;">Kembali</a>
        </form>
    </div>
@endsection
