@extends('bienvenidoprueba')
@section('title', 'libros')
@section('content')
<p>This is my body content.</p>
    @foreach ($books as $book)
    <p>Este es el libro {{ $book->titulo }}</p>
    <p>El autor {{$book->autor}}</p>
    @endforeach
@endsection
