@extends( 'layout.app' )

@section('comics')
<div class="background"></div>
<div class="container-background">
     <div class="container-card">
        <div class="current-series">CURRENT SERIES</div>
        
        @foreach( $comics as $elem )
        <div class="d-flex flex-column box-card">
                <a class="ancor" href="/comics/{{$elem['id']}}">
                    <img src="{{ $elem['thumb'] }}"  alt="">
                    <h3>{{$elem['title']}}</h3>
                </a>
                <div class="d-flex justify-content-around">
                    <form action=" {{ route('comics.destroy', $elem) }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger my-2">Elimina</button>
                    </form>
                    <a href=" {{ route( 'comics.edit', $elem ) }} " class="modifica my-2">Modifica</a>    
                </div>
            </div>
        @endforeach 
        
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary">LOAD MORE</button>
        
    </div>
</div>
</main>
@endsection