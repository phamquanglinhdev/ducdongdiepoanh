<div class="col-6 col-sm-6 col-md-6 col-lg-4 px-md-2 px-0 py-2">
    <div class="p-1 shadow-lg h-100 rounded">
        <div class="product-card rounded text-center p-2 mb-md-3">
            <a href="{{route("product",$product->slug)}}">
                <img src="{{$product->first_thumbnail}}" class="img-fluid pb-md-2" alt="">
                <div class="d-flex justify-content-center align-items-center pb-lg-4 product-rating">
                    @for($i=1;$i<=$product->rating;$i++)
                        <i class="small fas mx-1 fa-star text-warning" data-star="1"></i>
                    @endfor
                </div>
            </a>
        </div>
        <div class="p-1">
            <a href="#" class="text-dark">
                <div class="text-main font-weight-bold h5">{{$product->name}}</div>
            </a>
            <div class="d-lg-flex justify-content-between align-items-center">
                <strong class="font-weight-normal">{{$product->Category()->first()->name}}</strong>
                <div class="text-warning font-weight-bold h5">{{number_format($product->price)}} đ</div>
            </div>
            <div class="">Kích thước:{{$product->size}}</div>
            <div class="">Mã sản phẩm:{{$product->code}}</div>
        </div>
    </div>
</div>
