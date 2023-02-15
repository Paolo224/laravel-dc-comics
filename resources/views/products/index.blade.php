@extends('layouts.back')

@section('back-content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-end p-3">
            <a class="btn btn-primary btn-sm" href="{{route('products.create')}}">Inserisci un fumetto!</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="bg-dark text-light">
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
                        <td><img class="img-fluid" src="{{$product->thumb}}" alt=""></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->series}}</td>
                        <td>{{$product->sale_date}}</td>
                        <td>{{$product->type}}</td>
                        <td class="text-center p-2">
                            <a href="{{route('products.show', $product->id)}}">
                                <button class="btn btn-sm btn-primary mb-1">
                                    SHOW
                                </button>
                            </a>
                            <a href="{{route('products.edit', $product->id)}}">
                                <button class="btn btn-sm btn-warning mb-1">
                                    EDIT
                                </button>
                            </a>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        DELETE
                                    </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

