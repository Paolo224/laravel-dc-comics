@extends('layouts.back')

@section('back-content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-end p-3">
            <a class="btn btn-primary btn-sm" href="{{route('products.index')}}">Torna alla lista</a>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-3">
            <img class="img-fluid" src="{{$product->thumb}}" alt="">
        </div>
        <div class="col-9 text-center">
            <h1>
                {{$product->title}}
            </h1>
            <p>
                {{$product->description}}
            </p>
            <h3>
                Costo: {{$product->price}}
            </h3>
            <h4>
                Tipo: {{$product->type}}
            </h4>
    
        </div>
    </div>
</div>
@endsection


