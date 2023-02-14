<header class="container">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="img">
        </a>
    </div>
    <nav>
        <ul>
            <li>
                <a class="btn btn-outline-primary" href="{{route('products.index')}}">Products</a>
            </li>
        </ul>
    </nav>
</header>
<section class="jumbo">
    <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="Jumbotron">
</section>

