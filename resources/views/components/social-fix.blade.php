<style>
    .social-fix{
        position: fixed;
        bottom: 40% !important;
        right: 5px !important;
        z-index: 9;
    }
    .icon{
        width: 2.5em;
        height: 2.5em;
    }
</style>
<div class="social-fix d-flex align-items-end flex-column">
    <div class="">
        <a href="https://www.messenger.com/t/dododiepoanh" type="button"
           class="btn show-zalo  d-flex align-items-center p-1" target="_blank">
            <div class="icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Facebook_Messenger_logo_2020.svg/2048px-Facebook_Messenger_logo_2020.svg.png" class="w-100">
            </div>
        </a>
    </div>
    <div class="">
        <a href="https://zalo.me/3236278465751243976" type="button"
           class="btn d-flex align-items-center p-1" target="_blank">
            <div class="icon">
                <img src="{{asset("assets/images/zalo.svg")}}" class="w-100">
            </div>
        </a>
    </div>
    <div class="carts">
        <a href="tel:+84949806083" type="button"
           class="btn text-white show-cart rounded-pill d-flex align-items-center p-1 ">
{{--            <div class="font-weight-bold p-1 d-md-block d-none">0949.806.083</div>--}}
{{--            <div class="icon">--}}
                <img src="https://htcquangbinh.com.vn/images/phones.gif" class="icon">
{{--            </div>--}}
        </a>
    </div>
</div>
