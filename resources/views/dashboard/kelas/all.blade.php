@extends('dashboard.main')
@section('content')
    <h1  class="mt-4">Kelas Information</h1>
    <form action="/dashboard/kelas">
    <div class="input-group mb-3 ">
        <input type="text" class="form-control" placeholder="Search for Kelas" name="search" value="{{request('search')}}">
        <button class="btn btn-info bg-success text-white" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
    <a href="/kelas/create/" class="btn btn-outline-success">Add</a>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <td>Kelas</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $klass)
            <tr>
                <td>{{ $klass['nama_kelas']}}</td>
                {{-- <td>{{$klass->kelas->nama_kelas}}</td> --}}
                <td>
                    {{-- <a type="button" class="btn btn-primary" href="/kelas/detail/{{ $klass -> id}}">Detail</a> --}}
                    <a href="{{ route('kelas.edit', ['id' => $klass->id]) }}" class="btn btn-warning text-white">Edit</a>
                    <a href="{{ route('kelas.remove', ['id' => $klass->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center">
    {{ $kelas->links()}}
    </div>
@endsection