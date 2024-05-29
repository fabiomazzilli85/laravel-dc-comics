@extends('app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p><strong>Author:</strong> {{ $comic->author }}</p>
    <p><strong>Publication Date:</strong> {{ $comic->publication_date }}</p>
    <p><strong>Genre:</strong> {{ $comic->genre }}</p>
    <a href="{{ route('comics.index') }}">Back to list</a>
@endsection
