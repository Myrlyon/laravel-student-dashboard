@extends('dashboard.main')
@section('content')
    <h1 class="mt-4">Students Information</h1>
    <form action="/dashboard/student">
    <div class="input-group mb-3 ">
        <input type="text" class="form-control" placeholder="Search for Name" name="search" value="{{request('search')}}">
        <button class="btn btn-info bg-success text-white" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
    <a href="/student/create/" class="btn btn-outline-success">Add</a>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <td>NIS</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $students)
            <tr>
                <td>{{ $students['nis']}}</td>
                <td>{{ $students['nama_siswa']}}</td>
                <td>{{ $students['tanggal_lahir']}}</td>
                <td>{{ $students['alamat']}}</td>
                <td>{{$students->kelas->nama_kelas}}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/student/detail/{{ $students -> id}}">Detail</a>
                    <a href="{{ route('student.edit', ['id' => $students->id]) }}" class="btn btn-warning text-white">Edit</a>
                    <a href="{{ route('student.remove', ['id' => $students->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center">
    {{ $student->links() }}
    </div>
@endsection