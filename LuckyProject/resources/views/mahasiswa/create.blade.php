@extends('main')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <form action="{{ route('mahasiswa.store') }}"
    method="post">
        <div class="form-group">
            <label for="">Nama Program Studi</label>
            <input type="text" name="nama_prodi"
            class="form-control" value="{{ old ('nama_prodi') }}">
        </div>
        @error('nama_prodi')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="Foto"
            class="form-control" value="{{ old('foto') }}">

            