@extends( 'layout.app' );

@section('comics')
<div class="container-fumetto d-flex justify-content-around align-items-center">
   <div class="pb-2">
       <img src="{{ $fumetto['thumb'] }}"  alt="">
   </div>
   <div class="w-50">
       <h1>{{$fumetto['title']}}</h1>
       <div class="text-center">{{$fumetto['description']}}</div>
       <div class="d-flex justify-content-around align-items-center w-100">
           <h4 class="price">{{$fumetto['price']}}</h4>
           
           <h4>{{$fumetto['type']}}</h4>
        </div>
    </div>
</div>

@endsection