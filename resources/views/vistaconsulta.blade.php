@extends('bienvenidoprueba')
@section('title', 'libros')
@section('content')
    
    <p>Este es el libro {{ $books->titulo }}</p>
    <p>El autor {{$books->autor}}</p>
  
@endsection

