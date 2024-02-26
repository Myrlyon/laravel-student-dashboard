@extends('layouts.main')
@section('container')
    <h1>Students Information</h1>
    {{-- <a href="/student/create/" class="btn btn-outline-success">Add</a> --}}
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <td>NIS</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Alamat</td>
                <td>Kelas</td>
                {{-- <td>Action</td> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $students)
                <tr>
                    <td>{{ $students['nis'] }}</td>
                    <td>{{ $students['nama_siswa'] }}</td>
                    <td>{{ $students['tanggal_lahir'] }}</td>
                    <td>{{ $students['alamat'] }}</td>
                    <td>{{ $students->kelas->nama_kelas }}</td>
                    {{-- <td>
                    <a type="button" class="btn btn-primary" href="/student/detail/{{ $students -> id}}">Detail</a>
                    <a href="{{ route('student.edit', ['id' => $students->id]) }}" class="btn btn-warning text-white">Edit</a>
                    <a href="{{ route('student.remove', ['id' => $students->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Hapus</a>
                </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
