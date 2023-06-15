@extends( 'layout.app' );

@section('comics')
<div class="container">
    <h1>Form edit Fumetto</h1>
    <form action="{{ route( 'comics.update', $comic ) }}" method="POST" >

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="comic-title" class="form-label">Title</label>
            <input type="text" id="comic-title" name="title" class="form-control" value="{{$comic->title}}">
        </div>

        <div class="form-group">
            <label for="comic-description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="comic-description" cols="30" rows="10">{{$comic->description}}</textarea>
        </div>



        <div class="form-group">
            <label for="comic-thumb" class="form-label">Image</label>
            <input type="text" id="comic-thumb" name="thumb"  class="form-control" value="{{$comic->thumb}}">
        </div>

        <div class="form-group">
            <label for="comic-price" class="form-label">Price</label>
            <input type="text" id="comic-price" name="price"  class="form-control" value="{{$comic->price}}">
        </div>

        <div class="form-group">
            <label for="comic-series" class="form-label">Series</label>
            <input class="form-control" type="text" id="comic-series" class="form-control" placeholder="Inserisci series" name="series" value="{{$comic->series}}">
        </div>

        <div class="form-group">
            <label for="comic-sale_date" class="form-label">Sale_date</label>
            <input type="text" id="comic-sale_date" name="sale_date" class="form-control" value="{{$comic->sale_date}}">
        </div>

        <div class="form-group">
            <label for="comic-type" class="form-label">Type</label>
            <input type="text" id="comic-type" name="type" class="form-control" value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Modifica articolo</button>

    </form>
</div>
@endsection