@extends('app')

@section('content')
<h1>{{ $comic->title }}</h1>
<p><strong>Description: </strong>{{ $comic->description }}</p>
<p><strong>Author:</strong> {{ $comic->author }}</p>
<p><strong>Publication Date:</strong> {{ $comic->publication_date }}</p>
<p><strong>Genre:</strong> {{ $comic->genre }}</p>

<div class="d-flex gap-4 align-items-center">
    <a href="{{ route('comics.index') }}">Back to list</a>
    <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-link link-danger" type="submit">Delete Comic</button>
    </form>
</div>
@endsection
