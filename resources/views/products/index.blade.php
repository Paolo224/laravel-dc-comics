@extends('layouts.back')

@section('back-content')
<div class="container">
    <div class="row">
        <div class="offset-10 col-2">
            <a class="btn btn-primary btn-sm" href="{{route('products.create')}}">Inserisci un fumetto!</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                        <th>OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td><img src="{{$product->thumb}}" alt=""></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->series}}</td>
                        <td>{{$product->sale_date}}</td>
                        <td>{{$product->type}}</td>
                        <td class="d-flex flex-column">
                            <button class="btn btn-warning mb-1">
                                <a href="{{route('products.show', $product->id)}}">SHOW</a>
                            </button>
                            <button class="btn btn-warning mb-1">
                                <a href="">EDIT</a>
                            </button>
                            <button class="btn btn-warning">
                                <a href="">DELETE</a>
                            </button>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

