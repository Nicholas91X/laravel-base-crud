@extends('layouts.base')

@section('pageContentTitle')
    Comics List
@endsection

@section('pageContent')
<a href="{{ route('comics.create') }}"><button>Crea Nuovo</button></a>
    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic['title']}} <a href="{{ route('comics.show', $comic->id) }}"><button>Visualizza</button></a><a href="{{ route('comics.edit', $comic->id) }}"><button>Modifica</button></a><form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Elimina</button>
            </form></li>
        @endforeach
    </ul>
@endsection
