<header class="container">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="img">
        </a>
    </div>
    <nav>
        <ul>
            {{-- @foreach ($navBarEl as $item)   
            <li>{{$item}}</li>
            @endforeach --}}
        </ul>
    </nav>
</header>
<section class="jumbo">
    <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="Jumbotron">
</section>

