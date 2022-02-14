@extends('layouts.base')

@section('pageContentTitle')
    New Comic
@endsection

@section('pageContent')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Inserisci il titolo del fumetto" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="8" placeholder="Inserisci la descrizione del fumetto">{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" placeholder="Inserisci l'immagine del fumetto" value="{{old('thumb')}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Inserisci il prezzo del fumetto" value="{{old('price')}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" placeholder="Inserisci la serie del fumetto" value="{{old('series')}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Anno di pubblicazione</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" placeholder="Inserisci l'anno di pubblicazione del fumetto" value="{{old('sale_date')}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Inserisci il tipo di fumetto" value="{{old('type')}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Crea</button>
    </form>
@endsection

