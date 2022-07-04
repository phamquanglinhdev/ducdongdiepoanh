@php
    $total = 0;
@endphp
@if(isset($packs))
    @foreach($packs as $pack)
        @php
            $total += $pack->Product()->first()->price*$pack->quantity;
        @endphp
        <div class="d-flex justify-content-between mt-2">
            <div>
                <a href="{{route("product",$pack->Product()->first()->slug)}}" target="_blank" class="text-main"><i class="fas fa-info-circle"></i> </a>
                <img src="{{$pack->Product()->first()->first_thumbnail}}" width="50px" height="50px">
                <b>{{$pack->Product()->first()->name}}</b> x
                <input min="1" class="pack text-center" id="{{$pack->id}}" style="width: 3em" type="number"  value="{{$pack->quantity}}" required>
            </div>
            <div>  {{number_format($pack->Product()->first()->price*$pack->quantity)}} đ
{{--                <a class="text-main remove-pack" id="r-{{$pack->id}}"><i class="fas fa-trash-alt"></i> </a>--}}
            </div>
        </div>
        <hr>
    @endforeach
@else
    Giỏ hàng trống
@endif

<div class="d-flex justify-content-between">
{{--    <div class="font-weight-bold">Tổng</div>--}}
{{--    <div class="font-weight-bold">{{number_format($total)}} đ</div>--}}
</div>
<hr>
<style>
    input[type=number]::-webkit-inner-spin-button {
        opacity: 1
    }
</style>
