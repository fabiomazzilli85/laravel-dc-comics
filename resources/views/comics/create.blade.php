@extends('app')

@section('content')
    <h1 class="text-center my-5 text-danger">Add New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required>
        <br>
        <label for="publication_date">Publication Date:</label>
        <input type="date" name="publication_date" id="publication_date" required>
        <br>
        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" required>
        <br>
        <button type="submit" class="btn btn-outline-success mt-3">Aggiungi</button>
    </form>
@endsection
