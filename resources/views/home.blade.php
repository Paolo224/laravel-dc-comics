@extends('layouts.app')

@section('main-content')
<section class="bg-dark p-3">
    <div class="container">
        <div class="row">
            {{-- @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card bg-dark text-light border-dark">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>
                        {{$comic['title']}}
                    </p>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</section>
@endsection