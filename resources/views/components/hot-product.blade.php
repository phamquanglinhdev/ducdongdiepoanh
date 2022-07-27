<div class="d-flex justify-content-between">
    <div class="btn bg-main text-white w-25 rounded-0">Sản phẩm nổi bật</div>
    <a href="{{route("products")}}" class="btn text-main rounded-0">Xem tất cả</a>
</div>
<div class="mx-auto">
    <div class="row  m-0">
        @if(isset($HOT_PRODUCTS))
            @foreach($HOT_PRODUCTS as $product)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 pl-3 p-1 border">
                    <a href="{{route("product",$product->slug)}}"
                       style="text-decoration: none;color: inherit">
                        <div class=" rounded-20 text-center">
                            <img src="{{$product->first_thumbnail}}" class="w-100" alt="">
                            <div class="d-flex justify-content-center align-items-center pb-4">
{{--                                @for($i =1;$i<=5;$i++)--}}
{{--                                    @if($product->rating >= $i)--}}
{{--                                        <i class="small fas mx-1 fa-star text-warning"></i>--}}
{{--                                    @else--}}
{{--                                        <i class="small far mx-1 fa-star text-warning"></i>--}}
{{--                                    @endif--}}
{{--                                @endfor--}}
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
<hr>
{{--Fist categories--}}
@php
    $firstCategory = \App\Models\Category::where("active","=",1)->first();
    if(isset($firstCategory)){
        $products = $firstCategory->Products()->limit(8)->get();
    }
@endphp
<div class="d-flex justify-content-between">
    <div class="btn bg-main text-white w-25 rounded-0">{{$firstCategory->name??"Sản phẩm"}}</div>
    <a href="{{route("products",$firstCategory->id??null)}}" class="btn text-main rounded-0">Xem tất cả</a>
</div>
<div class="mx-auto">
    <div class="row  m-0">
        @if(isset($products))
            @foreach($products as $product)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 pl-3 p-1 border">
                    <a href="{{route("product",$product->slug)}}"
                       style="text-decoration: none;color: inherit">
                        <div class=" rounded-20 text-center">
                            <img src="{{$product->first_thumbnail}}" class="w-100" alt="">
                            <div class="d-flex justify-content-center align-items-center pb-4">
{{--                                @for($i =1;$i<=5;$i++)--}}
{{--                                    @if($product->rating >= $i)--}}
{{--                                        <i class="small fas mx-1 fa-star text-warning"></i>--}}
{{--                                    @else--}}
{{--                                        <i class="small far mx-1 fa-star text-warning"></i>--}}
{{--                                    @endif--}}
{{--                                @endfor--}}
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
