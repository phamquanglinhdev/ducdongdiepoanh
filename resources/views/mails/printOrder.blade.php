@php
    $total=0;
@endphp
@include(backpack_view('inc.head'))

<body class="app flex-row">

@yield('header')

<div class="container">
    <ul class="list-group list-group-flush mb-5 orders">
        <div class="mt-4 mb-2 ">Đơn hàng của khách hàng</div>
        <li class="list-group-item">
            <div>Họ và tên : {{$order->name}}</div>
            <div>Số điện thoại : {{$order->phone}}</div>
            <div>Email : {{$order->email}}</div>
        </li>
        <div class="mt-4 mt-2">Thông tin đơn hàng</div>
        <li class="list-group-item">
            <div>Mã vận đơn : #{{$order->id}}</div>
            <div>Địa Chỉ Giao Hàng : {{$order->address}}</div>
            <div>Phương thức thanh toán
                : {{$order->payment_method=="atm"?"Chuyển khoản":"Thanh toán khi nhận hàng"}}</div>

        </li>

        <div class="mt-4 mt-2">Chi tiết đơn hàng</div>
        <li class="list-group-item">
            @foreach($packs as $pack)
                <div>
                    @php
                        $total += $pack->quantity * $pack->Product()->first()->price;
                    @endphp
                    <div class="media">
                        <img class="mr-3 mb-0" src="{{$pack->Product()->first()->first_thumbnail}}"
                             alt="Generic placeholder image" style="width: 70px;height: 70px">
                        <div class="media-body">
                            <div class="mt-0 h5 font-weight-bold">{{$pack->Product()->first()->name}}</div>
                            <div><b>Đơn giá</b>: {{number_format($pack->Product()->first()->price)}} đ
                                x {{$pack->quantity}}
                            </div>
                            <div><b>Tạm tính</b> :{{number_format($pack->Product()->first()->price*$pack->quantity)}} đ
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
            <div class="font-weight-bold">Tổng : {{number_format($total)}} đ</div>
        </li>
        <div class="mt-4 mt-2">Lời nhắn :</div>
        <li class="list-group-item">
            {{$order->message}}
        </li>
    </ul>
</div>

<footer class="app-footer sticky-footer">
    @include('backpack::inc.footer')
</footer>

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))

@yield('after_scripts')
@stack('after_scripts')

</body>
</html>


