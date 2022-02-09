<ul>
    @foreach ($comics as $comic)
        <li>{{$comic['title']}} <a href="{{ route('comics.show', $comic->id) }}"><button>Visualizza</button></a></li>
    @endforeach
</ul>