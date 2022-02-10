@extends('layouts.base')

@section('pageContentTitle')
    Comic: {{$comic->title}}
@endsection

@section('pageContent')
<div class="card">
    <div class="m-3 text-center">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="info text-center">
        <h4>Descrizione: </h4>
        <p>{{$comic['description']}}</p>
        
        <h4>Prezzo: </h4>
        <p>{{$comic['price']}}</p>
        
        <h4>Anno di pubblicazione: </h4>
        <p>{{$comic['sale_date']}}</p>
    </div>
    

    <a class="text-center" href="{{ route('comics.index')}}">
        <button class="btn btn-primary">Catalogo</button>
    </a>
</div>

@endsection
