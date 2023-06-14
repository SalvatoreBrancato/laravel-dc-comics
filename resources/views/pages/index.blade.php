@extends( 'layout.app' )

@section('comics')
<div class="background"></div>
<div class="container-background">
     <div class="container-card">
        <div class="current-series">CURRENT SERIES</div>
        
        @foreach( $comics as $elem )
        <a class="ancor" href="/comics/{{$elem['id']}}">
            <div class="box-card">
                <img src="{{ $elem['thumb'] }}"  alt="">
                <h3>{{$elem['title']}}</h3>
            </div>
        </a>
        @endforeach 
        
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary">LOAD MORE</button>
    </div>
</div>
</main>
@endsection