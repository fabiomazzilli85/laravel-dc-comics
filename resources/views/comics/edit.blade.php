@extends('app')

@section('content')
<h1 class="text-center my-5 text-danger">Edit Comic: {{ $comic->title }}</h1>
<form action="{{ route('comics.update', $comic) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title">Title:</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $comic->title }}" required>
    </div>

    <div class="mb-3">
        <label for="description">Description:</label>
        <textarea class="form-control" name="description" id="description">{{ $comic->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="author">Author:</label>
        <input class="form-control" type="text" name="author" id="author" value="{{ $comic->author }}" required>
    </div>

    <div class="mb-3">
        <div class="form-group mb-3">
            <label for="publication_date">Publication Date:</label>
            <input class="form-control" type="date" name="publication_date" id="publication_date"
                value="{{ $comic->publication_date }}" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="genre">Genre:</label>
        <input class="form-control" type="text" name="genre" id="genre" value="{{ $comic->genre }}" required>
    </div>
  
    <br>
    <button class="btn btn-success my-3" type="submit">Update Comic</button>
</form>
@endsection