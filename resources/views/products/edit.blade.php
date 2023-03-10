@extends('layouts.back')

@section('back-content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end p-3">
                <a class="btn btn-primary btn-sm" href="{{route('products.index')}}">Torna alla lista</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('products.update', $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">
                            Titolo
                        </label>
                        <input type="text" class="form-control" name="title" value="{{$product->title}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Descrizione
                        </label>
                        <textarea class="form-control" name="description" cols="30" rows="10">{{$product->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Immagine
                        </label>
                        <input type="text" class="form-control" name="thumb" value="{{$product->thumb}}">
                        <img class="img-fluid d-block pt-3" src="{{$product->thumb}}" alt="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Prezzo
                        </label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Serie
                        </label>
                        <input type="text" class="form-control" name="series" value="{{$product->series}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Data di vendita
                        </label>
                        <input type="text" class="form-control" name="sale_date" value="{{$product->sale_date}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Tipo
                        </label>
                        <input type="text" class="form-control" name="type" value="{{$product->type}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection