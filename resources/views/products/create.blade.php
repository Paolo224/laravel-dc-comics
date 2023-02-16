@extends('layouts.back')

@section('back-content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end p-3">
                <a class="btn btn-primary btn-sm" href="{{route('products.index')}}">Torna alla lista</a>
            </div>
        </div>
        @if($errors->any()) 
            <div class="row">
                <div class="col-12 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                            {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <form action="{{route('products.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">
                            Titolo
                        </label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Descrizione
                        </label>
                        <textarea class="form-control" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Immagine
                        </label>
                        <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Prezzo
                        </label>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Serie
                        </label>
                        <input type="text" class="form-control" name="series" value="{{ old('series') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Data di vendita
                        </label>
                        <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Tipo
                        </label>
                        <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection