@extends('layouts.main')
@section('container')
    <h1>Kelas Information</h1>
    {{-- <a href="/kelas/create/" class="btn btn-outline-success">Add</a> --}}
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <td>Kelas</td>
                {{-- <td>Action</td> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $klass)
                <tr>
                    <td>{{ $klass['nama_kelas'] }}</td>
                    {{-- <td>{{$klass->kelas->nama_kelas}}</td> --}}
                    {{-- <td>
                    <a type="button" class="btn btn-primary" href="/kelas/detail/{{ $klass -> id}}">Detail</a>
                    <a href="{{ route('kelas.edit', ['id' => $klass->id]) }}" class="btn btn-warning text-white">Edit</a>
                    <a href="{{ route('kelas.remove', ['id' => $klass->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Hapus</a>
                </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
