@extends('main')

@section('content')
    <hi>Fakultas</h1>

    @foreach ($result as $item)
        {{ $item->nama_fakultas}}  
    @endforeach
@endsection