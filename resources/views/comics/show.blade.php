<div>
    <img src="{{$comic['thumb']}}" alt="">
    <p>{{$comic['description']}}</p>
    <p>{{$comic['price']}}</p>
    <p>{{$comic['sale_date']}}</p>
</div>

<a href="{{ route('comics.index')}}"><button>Catalogo</button></a>