<div class="col-12 col-sm-6 col-md-6 col-lg-4 px-sm-2 px-2 py-2 pb-lg-5">
    <div class="product-card shadow-lg rounded-20 text-center p-2 mb-3">
        <a href="#">
            <img src="{{$product->first_thumbnail}}" class="img-fluid pb-2" alt="">
            <div class="d-flex justify-content-center align-items-center pb-4 product-rating">
                @for($i=1;$i<=$product->rating;$i++)
                    <i class="small fas mx-1 fa-star text-warning" data-star="1"></i>
                @endfor
            </div>
        </a>
    </div>
    <div class="p-1">
        <a href="#" class="nav-link text-dark">
            <div class="text-main font-weight-bold h5">{{$product->name}}</div>
        </a>
        <div class="d-flex justify-content-between align-items-end">
            <strong class="font-weight-normal">{{$product->Category()->first()->name}}</strong>
            <div class="text-warning font-weight-bold h5">{{number_format($product->price)}} đ</div>
        </div>
        <strong class="">{{$product->size}}</strong>
    </div>
</div>