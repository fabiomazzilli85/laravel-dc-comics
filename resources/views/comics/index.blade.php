@extends('app')

@section('content')
    <h1>Comics Archive</h1>
    <a href="{{ route('comics.create') }}">Add New Comic</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
