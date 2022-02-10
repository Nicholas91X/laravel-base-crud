@extends('layouts.base')

@section('pageContentTitle')
    Modify Comic: {{$comic->title}}
@endsection

@section('pageContent')
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del fumetto" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="8" placeholder="Inserisci la descrizione del fumetto">{{$comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci l'immagine del fumetto" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo del fumetto" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci la serie del fumetto" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Anno di pubblicazione</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci l'anno di pubblicazione del fumetto" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci il tipo di fumetto" value="{{$comic->type}}">
        </div>
        <button type="submit">Modifica</button>
    </form>
@endsection
