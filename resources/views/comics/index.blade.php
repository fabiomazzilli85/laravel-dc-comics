@extends('app')

@section('content')
    <h1>Comics Archive</h1>
    <a href="{{ route('comics.create') }}">Add New Comic</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                <div class="d-flex gap-2">
                    <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-link link-danger" type="submit">Delete Comic</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

