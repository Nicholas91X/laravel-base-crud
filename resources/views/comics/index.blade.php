@extends('layouts.base')

@section('pageContentTitle')
    Comics List
@endsection

@section('pageContent')
    <a href="{{ route('comics.create') }}">
        <button class="btn btn-success">Crea Nuovo +</button>
    </a>
    
    <table class="table table-dark table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Anno</th>
            <th scope="col">Prezzo</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic['id']}}</td>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['price']}}€</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <button class="btn btn-primary">Visualizza</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', $comic->id) }}">
                            <button class="btn btn-warning">Modifica</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
