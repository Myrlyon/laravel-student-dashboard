@extends('layouts.main')

@section('container')
    {{ $student->nis }} <br>
    {{ $student->nama }} <br>
    {{ $student->kelas }} <br>
    {{ $student->alamat }} <br>

    <a href="http://127.0.0.1:8000/student/all">Back</a>
@endsection
