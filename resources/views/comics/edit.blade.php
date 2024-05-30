@extends('app')

@section('content')
    <h1 class="text-center my-5 text-danger">Edit Comic</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $comic->description }}</textarea>
        <br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="{{ $comic->author }}" required>
        <br>
        <label for="publication_date">Publication Date:</label>
        <input type="date" name="publication_date" id="publication_date" value="{{ $comic->publication_date }}" required>
        <br>
        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" value="{{ $comic->genre }}" required>
        <br>
        <button type="submit">Update Comic</button>
    </form>
@endsection
