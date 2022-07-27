<div class="btn bg-main text-white w-100 rounded-0">Sản phẩm nổi bật</div>
<div class="mx-auto">
    <div class="row  m-0">
        @if(isset($HOT_PRODUCTS))
            @foreach($HOT_PRODUCTS as $product)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 pl-3 p-1 border">
                    <a href="{{route("product",$product->slug)}}"
                       style="text-decoration: none;color: inherit">
                        <div class=" rounded-20 text-center mb-3">
                            <img src="{{$product->first_thumbnail}}" class="w-100" alt="">
                            <div class="d-flex justify-content-center align-items-center pb-4">
                                @for($i =1;$i<=5;$i++)
                                    @if($product->rating >= $i)
                                        <i class="small fas mx-1 fa-star text-warning"></i>
                                    @else
                                        <i class="small far mx-1 fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div class="text-main font-weight-bold ">{{$product->name}}</div>
                        <div class="justify-content-between align-items-end">
                            <div class="text-main">{{$product->Category()->first()->name}}</div>
                            <div class="text-main">Kích thước :{{$product->size}}</div>
                            <div class="text-main">Mã sản phẩm :{{$product->code}}</div>
                            {{--                                    <div class="text-warning font-weight-bold h5">{{number_format($product->price)}}đ--}}
                            {{--                                    </div>--}}
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>

</div>
