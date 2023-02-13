<header class="container">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="img">
        </a>
    </div>
    <nav>
        <ul>
            <li>
                <a href="{{route('products.index')}}">Products</a>
            </li>
        </ul>
    </nav>
</header>
<section class="jumbo">
    <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="Jumbotron">
</section>

