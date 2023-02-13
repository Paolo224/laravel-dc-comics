<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img src="{{$product->thumb}}" alt="">
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
</div>


