@extends('layouts.main')

@section('container')
    <h1>Ini Adalah Halaman About</h1>
    <h5>Nama : {{$nama}} </h5>
    <h5>Kelas : {{$kelas}}</h5>
    <h5>Foto : <img src="{{$foto}}" alt="" height="300"></h5>
@endsection