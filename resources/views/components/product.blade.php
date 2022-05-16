<div class="card w-100 col-md-3 col-sm-6">
    <img class="card-img-top" src="{{$product->first_thumbnail}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"> {{$product->name}}</h5>
        <p class="card-text">{{$product->Category()->first()->name}}</p>
        <p class="card-text">{!! $product->description!!}</p>
        <p class="card-text">{{$product->size}}</p>
        <a href="#" class="btn btn-primary">  {{$product->price}}</a>
    </div>
</div>

