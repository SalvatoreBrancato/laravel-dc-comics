@extends( 'layout.app' );

@section('comics')

<img src="{{ $fumetto['thumb'] }}"  alt="">
<h1>{{$fumetto['title']}}</h1>
<div>{{$fumetto['description']}}</div>
<h2>{{$fumetto['price']}}</h2>
<h3>{{$fumetto['series']}}</h3>
<h4>{{$fumetto['sale_date']}}</h4>
<h5>{{$fumetto['type']}}</h5>

@endsection