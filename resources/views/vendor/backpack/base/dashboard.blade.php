@extends(backpack_view('blank'))
@php
$orders = \App\Models\Order::all();
$products =\App\Models\Product::all();
$customers = \App\Models\User::where("role","=",1)->get();
$income = \App\Models\Order::Income();
@endphp

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{route("product.index")}}" class="card-link">
                <div class="card border-0 text-white bg-cyan">
                    <div class="card-body">
                        <div class="text-value">{{$products->count()}}</div>
                        <div>Sản phẩm</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{route("order.index")}}" class="card-link">
                <div class="card border-0 text-white bg-warning">
                    <div class="card-body">
                        <div class="text-value">{{$orders->count()}}</div>
                        <div>Đơn hàng</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <a href="#" class="card-link">
                <div class="card border-0 text-white bg-behance">
                    <div class="card-body">
                        <div class="text-value">{{$customers->count()}}</div>
                        <div>Khách hàng</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <a href="#" class="card-link">
                <div class="card border-0 text-white bg-success">
                    <div class="card-body">
                        <div class="text-value">{{number_format($income)}} đ</div>
                        <div>Doanh thu ước lượng</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
