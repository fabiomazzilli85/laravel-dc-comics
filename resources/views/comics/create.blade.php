@extends('app')

@section('content')
<h1 class="text-center my-5 text-danger">Add New Comic</h1>
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div class="mb-3">
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <div class="mb-3">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required>
    </div>

    <div class="mb-3">
        <label for="publication_date">Publication Date:</label>
        <input type="date" name="publication_date" id="publication_date" required>
    </div>

    <div class="mb-3">
        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" required>
    </div>

    <button type="submit" class="btn btn-outline-success mt-3">Aggiungi</button>
</form>
@endsection